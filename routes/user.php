<?php

use App\Http\Controllers\user\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\PendudukController;

Route::get('/home', function () {
    return view('user.home');
})->name('user.home');

Route::prefix('penduduk')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [PendudukController::class, 'index'])->name('user.penduduk');
        Route::get('/detail/{nik}', [PendudukController::class, 'show'])->name('user.detail');
    });
});

Route::prefix('berita')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('user.berita');
        Route::get('/detail/{slug}', [BeritaController::class, 'show'])->name('user.detailberita');
        Route::get('/create', [BeritaController::class, 'create'])->name('user.berita.tambah');
        Route::post('/store', [BeritaController::class, 'store'])->name('user.berita.store');
        Route::delete('/delete/{berita}', [BeritaController::class, 'destroy'])->name('user.berita.delete');
        Route::post('/status', [BeritaController::class, 'set_status'])->name('user.berita.status');
    });
});

Route::get('/profile', function () {
    return view('user.profile');
});

Route::get('/agenda', function () {
    return view('user.berita.riwayatBerita');
})->name('user.agenda');


// Layanan route
Route::get('/layanan', function () {
    return view('user.layanan.index');
})->name('user.layanan');
