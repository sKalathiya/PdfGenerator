<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;


Route::get('/access/{pdf}', [PdfController::class, 'accessPdf'])->name('accessPdf');
Route::get('/generate', [PdfController::class, 'generatePdf'])->name('generatePdf');
