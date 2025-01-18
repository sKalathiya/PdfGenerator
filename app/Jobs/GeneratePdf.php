<?php

namespace App\Jobs;

use App\Enums\PdfStatus;
use App\Models\Pdf;
use App\Services\PdfService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Http;
use Barryvdh\DomPDF\Facade\Pdf as PdfLoader;
use Illuminate\Support\Facades\Storage;
use Exception;
use Throwable;

class GeneratePdf implements ShouldQueue
{
    use Queueable;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public int $tries = 3;

    /**
     * The pdf instance passed to job.
     *
     * @var Pdf
     */
    protected Pdf $pdf;

    /**
     * Create a new job instance.
     */
    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * Execute the job.
     *
     * Gets the data from API end point, loads the data onto the Pdf
     * , uploads to Azure Blob storage and changes the status of the Pdf in database.
     *
     * @return void
     * @throws Exception
     */
    public function handle(): void
    {
        try {
            // Step 1: Update status to 'GENERATING'
            PdfService::changeStatus($this->pdf , PdfStatus::GENERATING->name);

            // Fetch data from API
            $data = Http::get("https://api.websiteranking.ai/api/sites/insightsByUrl/?url=https://youtube.com")->json();

            try {
                // Step 2: Generate PDF
                $pdfFile = PdfLoader::loadView('welcome',  $data)->output();
            } catch (Exception $e) {
                // Handle PDF generation errors
                PdfService::setErrorMsg($this->pdf,  "Error generating PDF: " . $e->getMessage());
                throw $e; // Stop further execution
            }

            try {
                // Step 3: Upload PDF to Azure Storage
                Storage::disk("azure")->put($this->pdf->id . ".pdf", $pdfFile);
            } catch (Exception $e) {
                // Handle storage upload errors
                PdfService::setErrorMsg($this->pdf,  "Error uploading PDF to storage: " . $e->getMessage());
                throw $e; // Stop further execution
            }

            // Step 4: Update status to 'SUCCESS'
            PdfService::changeStatus($this->pdf , PdfStatus::SUCCESS->name, $this->generateAzureUrl($this->pdf->id));
        } catch (Exception $e) {
            // Global error handling (for unexpected errors)
            PdfService::setErrorMsg($this->pdf, "Unexpected error: " . $e->getMessage());
            throw $e; // Stop further execution
        }
    }

    /**
     * Generate Azure file URL.
     *
     * @param $pdfId
     * @return string
     */
    private function generateAzureUrl($pdfId): string
    {
        return "https://pdfstorage122.blob.core.windows.net/pdf/{$pdfId}.pdf";
    }


    /**
     * Executes once job fails after max retries.
     *
     * @param Throwable|null $exception
     * @return  void
     */
    public function failed(?Throwable $exception): void
    {
        PdfService::changeStatus($this->pdf , PdfStatus::FAILED->name);
    }
}
