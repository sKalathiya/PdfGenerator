<?php

namespace App\Http\Controllers;

use App\Http\Resources\PdfResource;
use App\Jobs\GeneratePdf;
use App\Models\Pdf;
use App\Services\PdfService;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * Returns the Pdf resource for the requested Pdf ID.
     *
     * @param Pdf $pdf
     * @return PdfResource
     */
    public function accessPdf(Pdf $pdf)
    {
        //Return the PdfResource based on the request ID
        return PdfService::getStatus($pdf);
    }


    /**
     * Generates Pdf request and then dispatches the request to GeneratePdf job.
     * Returns Pdf resource for the newly created Pdf ID.
     *
     * @param Request $request
     * @return PdfResource
     */
    public function generatePdf(Request $request)
    {
        //Create instance of the Pdf request
        $pdf =  PdfService::createPdfRequest("1");

        //Dispatch the request ot GeneratePdf job
        GeneratePdf::dispatch($pdf);

        //Return the PdfResource
        return new PdfResource($pdf);
    }

}
