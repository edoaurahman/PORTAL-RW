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
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', fn() => redirect(route('admin.dashboard')));
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        // Admin Penduduk
        Route::prefix('penduduk')->group(function () {
            Route::get('/', [PendudukController::class, 'index'])->name('admin.penduduk');
            Route::post('/', [PendudukController::class, 'store'])->name('admin.penduduk');
            Route::get('/kk', [PendudukController::class, 'kk_penduduk'])->name('admin.penduduk.kk');
            Route::get('/akun', [PendudukController::class, 'akun_penduduk'])->name('admin.penduduk.akun');
            Route::get('/kk/detail/{no_kk}', [PendudukController::class, 'kk_detail_penduduk'])->name('admin.penduduk.kk.detail');
            Route::get('/detail/{nik}', [PendudukController::class, 'detail_penduduk'])->name('admin.penduduk.detail');
        });
        // Route::get('/penduduk', [PendudukController::class, 'index'])->name('admin.penduduk');
        // Route::get('/penduduk/kk', [PendudukController::class, 'kk_penduduk'])->name('admin.penduduk.kk');
        // Route::get('/penduduk/akun', [PendudukController::class, 'akun_penduduk'])->name('admin.penduduk.akun');
        // Route::get('/penduduk/kk/detail', [PendudukController::class, 'akun_penduduk'])->name('admin.penduduk.kk.detail');

        Route::get('/bansos', [BansosController::class, 'index'])->name('admin.bansos');
        Route::get('/data-rt', [RTController::class, 'index'])->name('admin.data-rt');
        Route::get('/data-umkm', [UmkmController::class, 'index'])->name('admin.data-umkm');
        Route::get('/inventaris', [InventarisController::class, 'index'])->name('admin.inventaris');
        Route::get('/keuangan', [KeuanganController::class, 'index'])->name('admin.keuangan');
        Route::get('/layanan', [LayananController::class, 'index'])->name('admin.layanan');
        Route::get('/news', [NewsController::class, 'index'])->name('admin.news');
        Route::get('/report-data', [ReportDataController::class, 'index'])->name('admin.report-data');
        Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('admin.aspirasi');
        Route::get('/level', [LevelController::class, 'index'])->name('admin.level')->middleware('isSuperAdmin');
    });
});

Route::get('/home', function () {
    return view('user.home');
})->name('user.home');

Route::get('/profile', function () {
    return view('user.profile');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/error', function () {
    return view('error');
})->name('error');