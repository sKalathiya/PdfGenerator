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
        return match ($pdf->status) {
            PdfStatus::FAILED => \response(new PdfResource($pdf), 500),
            PdfStatus::SUCCESS => \response(new PdfResource($pdf)),
            default => \response(new PdfResource($pdf), 202),
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
        //userId
        $userId = $request->user()?->id || "1";

        //Create Pdf instance of the Pdf request
        $pdf =  PdfService::createPdfRequest($userId);

        //Dispatch the request ot GeneratePdf job
        GeneratePdf::dispatch($pdf);


        return response(new PdfResource($pdf), 202);
    }

}
