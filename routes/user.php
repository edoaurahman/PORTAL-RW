<?php

use App\Http\Controllers\user\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\PendudukController;

Route::prefix('penduduk')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [PendudukController::class, 'index'])->name('user.penduduk');
        Route::get('/detail/{nik}', [PendudukController::class, 'show'])->name('user.detail');
    });
});

Route::prefix('berita')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('user.berita');
        Route::get('/detail/{id}', [BeritaController::class, 'show'])->name('user.detailberita');
    });
});
