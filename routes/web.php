<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing.page');
Route::get('/app/{id}', [QrCodeController::class, 'show'])->name('qr.show');
Route::post('/app/store', [QrCodeController::class, 'store'])->name('qr.store');
Route::get('/app/{id}/edit', [QrCodeController::class, 'edit'])->name('qr.edit');
Route::put('/app/{id}', [QrCodeController::class, 'update'])->name('qr.update');
