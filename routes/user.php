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
        Route::get('/detail/{id}', [BeritaController::class, 'show'])->name('user.detailberita');
    });
});

Route::get('/profile', function () {
    return view('user.profile');
});

Route::get('/agenda', function () {
    return view('user.berita.riwayatBerita');
})->name('user.agenda');

Route::get('/umkm', function () {
    return view('user.umkm.index');
})->name('user.umkm');

// Layanan route
Route::get('/layanan', function () {
    return view('user.layanan.index');
})->name('user.layanan');
