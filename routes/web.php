<?php

use App\Http\Controllers\IdCardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/id-form', function () {
    return view('idform');
})->name('id-form');

Route::get('/templates', function () {
    return view('templates');
})->name('templates');

Route::post('/id-card/store', [IdCardController::class, 'store'])
    ->name('id-card.store');

    Route::get('/id-card/{id}', [IdCardController::class, 'show'])->name('id-card.show');
Route::get('/id-card/{id}/download', [IdCardController::class, 'downloadPdf'])->name('id-card.download');
// Show ID card with template selection
Route::get('/id-card/{id}/{template?}', [IdCardController::class, 'show'])
    ->name('id-card.show')
    ->where('template', 'template1|template2|template3|template4');

// Download PDF with specific template
Route::get('/id-card/{id}/download/{template}', [IdCardController::class, 'downloadPdf'])
    ->name('id-card.download')
    ->where('template', 'template1|template2|template3|template4');