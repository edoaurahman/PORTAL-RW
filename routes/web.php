<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ReportDataController;
use App\Http\Controllers\RTController;
use App\Http\Controllers\UmkmController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // redirect to home
    return redirect(route('user.home'));
});

Route::prefix('admin')->group(function () {
    Route::middleware(['auth', 'admin'])->group(function () { // auth and admin middleware
        Route::get('/', fn() => redirect(route('admin.dashboard')));
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        // Admin Penduduk
        Route::prefix('penduduk')->group(function () {
            Route::get('/', [PendudukController::class, 'index'])->name('admin.penduduk');
            Route::post('/', [PendudukController::class, 'store'])->name('admin.penduduk.store');
            Route::post('/update', [PendudukController::class, 'update'])->name('admin.penduduk.update');
            Route::get('/kk', [PendudukController::class, 'kk_penduduk'])->name('admin.penduduk.kk');
            Route::get('/akun', [PendudukController::class, 'akun_penduduk'])->name('admin.penduduk.akun');
            Route::post('/akun', [PendudukController::class, 'akun_penduduk_store'])->name('admin.penduduk.akun.store');
            Route::get('/kk/detail/{no_kk}', [PendudukController::class, 'kk_detail_penduduk'])->name('admin.penduduk.kk.detail');
            Route::get('/detail/{nik}', [PendudukController::class, 'detail_penduduk'])->name('admin.penduduk.detail');
            Route::delete('/{nik}', [PendudukController::class, 'destroy'])->name('admin.penduduk.delete');
        });

        Route::get('/bansos', [BansosController::class, 'index'])->name('admin.bansos');
        Route::get('/data-umkm', [UmkmController::class, 'index'])->name('admin.data-umkm');
        Route::get('/inventaris', [InventarisController::class, 'index'])->name('admin.inventaris');
        Route::get('/keuangan', [KeuanganController::class, 'index'])->name('admin.keuangan');
        Route::get('/layanan', [LayananController::class, 'index'])->name('admin.layanan');
        Route::get('/news', [NewsController::class, 'index'])->name('admin.news');
        Route::get('/report-data', [ReportDataController::class, 'index'])->name('admin.report-data');
        Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('admin.aspirasi');

        Route::get('/data-rt', [RTController::class, 'index'])->name('admin.data-rt')->middleware(['isRw',]);
        Route::prefix('level')->group(function () {
            Route::middleware(['isSuperAdmin'])->group(function () { // isSuperAdmin middleware
                Route::get('/', [LevelController::class, 'index'])->name('admin.level');
                Route::post('/', [LevelController::class, 'store'])->name('admin.level.store');
                Route::delete('/', [LevelController::class, 'delete'])->name('admin.level.delete');
            });
        });
    });
});

Route::get('/home', function () {
    return view('user.home');
})->name('user.home');



Route::get('/profile', function () {
    return view('user.profile');
});

Route::get('/penduduk', function () {
    return view('user.penduduk');
})->name('user.penduduk');

Route::get('/berita', function () {
    return view('user.berita');
})->name('user.berita');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/error', function () {
    return view('error');
})->name('error');