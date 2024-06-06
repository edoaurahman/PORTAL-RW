<?php

use App\Http\Controllers\User\AspirasiController;
use App\Http\Controllers\User\AgendaController;
use App\Http\Controllers\User\BansosController;
use App\Http\Controllers\User\InventarisController;
use App\Http\Controllers\User\LayananController;


use App\Http\Controllers\User\BeritaController;
use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PendudukController;
use App\Http\Controllers\User\UmkmController;
use App\Http\Controllers\User\UserController;

// menus


Route::get('/home', [UserController::class, 'index'])->name('user.home');

Route::prefix('aspirasi')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::post('/store', [AspirasiController::class, 'store'])->name('user.aspirasi.store');
    });
});

Route::prefix('penduduk')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [PendudukController::class, 'index'])->name('user.penduduk');
        Route::get('/detail/{nik}', [PendudukController::class, 'show'])->name('user.detail');
    });
});

Route::prefix('berita')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/create', [BeritaController::class, 'create'])->name('user.berita.tambah');
        Route::post('/store', [BeritaController::class, 'store'])->name('user.berita.store');
        Route::delete('/delete/{berita}', [BeritaController::class, 'destroy'])->name('user.berita.delete');
        Route::post('/status', [BeritaController::class, 'set_status'])->name('user.berita.status');
        Route::get('/edit/{berita}', [BeritaController::class, 'edit'])->name('user.berita.edit');
        Route::put('/', [BeritaController::class, 'update'])->name('user.berita.update');
        Route::get('/dashboard', [BeritaController::class, 'riwayatBerita'])->name('user.berita.dashboard');
    });
});

Route::prefix('bansos')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [BansosController::class, 'index'])->name('user.bansos');
        Route::post('/store', [BansosController::class, 'store'])->name('user.bansos.store');
    });
});

Route::prefix('umkm')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [UmkmController::class, 'index'])->name('user.umkm');
        Route::get('/dashboard', [UmkmController::class, 'dashboard'])->name('user.umkm.dashboard');
        Route::get('/detail/{id}', [UmkmController::class, 'show'])->name('user.umkm.detail');
        Route::get('/create', [UmkmController::class, 'create'])->name('user.umkm.tambah');
        Route::post('/store', [UmkmController::class, 'store'])->name('user.umkm.store');
        Route::get('/edit/{umkm}', [UmkmController::class, 'edit'])->name('user.umkm.edit');
        Route::put('/', [UmkmController::class, 'update'])->name('user.umkm.update');
        Route::delete('/detete/{umkm}', [UmkmController::class, 'destroy'])->name('user.umkm.delete');

    });
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
});

Route::get('/agenda', [AgendaController::class, 'index'])->name('user.agenda');

Route::get('/inventaris', [InventarisController::class, 'index'])->name('user.inventaris')->middleware('auth');
Route::post('/inventaris/pinjam', [InventarisController::class, 'pinjam'])->name('user.inventaris.pinjam')->middleware('auth');

// Layanan route
Route::get('/layanan', [LayananController::class, 'index'])->name('user.layanan');
// Berita
Route::get('/', [BeritaController::class, 'index'])->name('user.berita');
Route::get('/detail/{slug}', [BeritaController::class, 'show'])->name('user.berita.detail');
