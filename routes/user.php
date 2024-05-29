<?php

use App\Http\Controllers\User\AspirasiController;
use App\Http\Controllers\User\AgendaController;
use App\Http\Controllers\User\BansosController;
use App\Http\Controllers\User\InventarisController;
use App\Http\Controllers\User\LayananController;


use App\Http\Controllers\User\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\PendudukController;
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
        Route::get('/', [BeritaController::class, 'index'])->name('user.berita');
        Route::get('/detail/{slug}', [BeritaController::class, 'show'])->name('user.berita.detail');
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


Route::get('/profile', function () {
    return view('user.profile');
})->name('user.profile');

Route::get('/agenda', [AgendaController::class, 'index'])->name('user.agenda');

Route::get('/umkm', function () {
    return view('user.UMKM.index');
})->name('user.umkm');

// Route::get('/inventaris', function () {
//     return view('user.inventaris.index');
// })->name('user.inventaris');

Route::get('/inventaris', [InventarisController::class, 'index'])->name('user.inventaris');
Route::post('/inventaris/pinjam', [InventarisController::class, 'pinjam'])->name('user.inventaris.pinjam');

// Layanan route
Route::get('/layanan', [LayananController::class, 'index'])->name('user.layanan');
