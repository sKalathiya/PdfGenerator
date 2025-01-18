<?php

use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accessPdf/{pdf}', [PdfController::class, 'accessPdf'])->name('accessPdf');
Route::get('/generatePdf', [PdfController::class, 'generatePdf'])->name('generatePdf');
