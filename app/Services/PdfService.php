<?php
namespace App\Services;


use App\Enums\PdfStatus;
use App\Http\Resources\PdfResource;
use App\Models\Pdf;

/**
 * Service for Pdf Model.
 */
class PdfService
{
    /**
     * Creates and store a new instance of pdf request in database.
     *
     * @param string $userId
     * @return Pdf
     */
    public static function createPdfRequest(string $userId): Pdf
    {
        return Pdf::create(["user_id" => $userId , "status" => PdfStatus::PENDING]);
    }


    /**
     * Gets the status of the Pdf as Json resource.
     *
     * @param Pdf $pdf
     * @return PdfResource
     */
    public static function getStatus(Pdf $pdf): PdfResource
    {
        return new PdfResource($pdf);
    }


    /**
     * Changes the status of the Pdf and if Success, adds the public URL.
     *
     * @param Pdf $pdf
     * @param PdfStatus $pdfStatus
     * @param string|null $url
     * @return void
     */
    public static function changeStatus (Pdf $pdf ,PdfStatus $pdfStatus , string $url = null):void{
        $pdf->status = $pdfStatus;
        if ( $pdfStatus === PdfStatus::SUCCESS) {
            $pdf->url = $url;
        }
        $pdf->save();
    }

    /**
     * Sets the error message for Pdf.
     *
     * @param Pdf $pdf
     * @param string $err
     * @return void
     */
    public static function setErrorMsg (Pdf $pdf, string $err): void{
        $pdf->error_message = $err;
        $pdf->save();
    }

}
