<?php

namespace App\Http\Controllers;

use App\Enums\PdfStatus;
use App\Http\Resources\PdfResource;
use App\Jobs\GeneratePdf;
use App\Models\Pdf;
use App\Services\PdfService;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PdfController extends Controller
{
    /**
     * Returns the Pdf resource for the requested Pdf ID.
     *
     * @param Pdf $pdf
     * @return Application|Response|ResponseFactory
     */
    public function accessPdf(Pdf $pdf)
    {
        //Return the PdfResource based on the request ID
        $pdf =  PdfService::getStatus($pdf);

        return match ($pdf->status) {
            PdfStatus::FAILED => \response($pdf, 500),
            PdfStatus::SUCCESS => \response($pdf),
            default => \response($pdf, 202),
        };
    }


    /**
     * Generates Pdf request and then dispatches the request to GeneratePdf job.
     * Returns Pdf resource for the newly created Pdf ID.
     *
     * @param Request $request
     * @return ResponseFactory|Application|Response
     */
    public function generatePdf(Request $request)
    {
        //Create Pdf resource of the Pdf request
        $pdf =  PdfService::createPdfRequest("1");

        //Dispatch the request ot GeneratePdf job
        GeneratePdf::dispatch($pdf);

        //Return the PdfResource
        return \response(new PdfResource($pdf) , 202);
    }

}
