<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Penduduk\PendudukController;

Route::prefix('penduduk')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [PendudukController::class, 'index'])->name('user.penduduk');
        Route::get('/detail/{nik}', [PendudukController::class, 'show'])->name('user.detail');
    });
});
Route::get('/beritaa', function () {
    return view('user.berita.index');
})->name('user.beritaa');
Route::get('/detailBerita', function () {
    return view('user.berita.detailBerita');
})->name('user.detailBerita');
Route::get('/beritaaa', function () {
    return view('user.berita.populerBerita');
})->name('user.populerBerita');
