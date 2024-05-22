<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AspirasiController;
use App\Http\Controllers\Admin\BansosController;
use App\Http\Controllers\Admin\InventarisController;
use App\Http\Controllers\Admin\KeuanganController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PendudukController;
use App\Http\Controllers\Admin\ReportDataController;
use App\Http\Controllers\Admin\RTController;
use App\Http\Controllers\Admin\UmkmController;
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
            Route::put('/update', [PendudukController::class, 'update'])->name('admin.penduduk.update');
            Route::get('/kk', [PendudukController::class, 'kk_penduduk'])->name('admin.penduduk.kk');
            Route::get('/detail/{nik}', [PendudukController::class, 'detail_penduduk'])->name('admin.penduduk.detail');
            Route::delete('/{nik}', [PendudukController::class, 'destroy'])->name('admin.penduduk.delete');

            Route::prefix('akun')->group(function () {
                Route::get('/', [PendudukController::class, 'akun_penduduk'])->name('admin.penduduk.akun');
                Route::post('/store', [PendudukController::class, 'akun_penduduk_store'])->name('admin.penduduk.akun.store');
                Route::put('/update', [PendudukController::class, 'akun_penduduk_update'])->name('admin.penduduk.akun.update');
                Route::delete('/delete/{id}', [PendudukController::class, 'akun_penduduk_delete'])->name('admin.penduduk.akun.delete');
            });

            Route::prefix('kk')->group(function () {
                Route::get('/detail/{no_kk}', [PendudukController::class, 'kk_detail_penduduk'])->name('admin.penduduk.kk.detail');
                Route::put('/update', [PendudukController::class, 'update_kk'])->name('admin.penduduk.kk.update');
            });
        });

        Route::prefix('bansos')->group(function () {
            Route::get('/', [BansosController::class, 'index'])->name('admin.bansos');
            Route::post('/store', [BansosController::class, 'store'])->name('admin.bansos.store');
            Route::get('/{bansos}', [BansosController::class, 'show'])->name('admin.bansos.show');
            Route::delete('/foto', [BansosController::class, 'destroy_foto_bansos'])->name('admin.bansos.foto.delete');
            Route::put('/update/{bansos}', [BansosController::class, 'update'])->name('admin.bansos.update');
            Route::delete('/', [BansosController::class, 'destroy'])->name('admin.bansos.delete');
            Route::put('/status', [BansosController::class, 'status'])->name('admin.bansos.status');
        });
        Route::get('/data-umkm', [UmkmController::class, 'index'])->name('admin.data-umkm');
        Route::prefix('inventaris')->group(function () {
            Route::get('/', [InventarisController::class, 'index'])->name('admin.inventaris');
            Route::delete('/{id_inventaris}', [InventarisController::class, 'destroy'])->name('admin.inventaris.delete');
        });


        Route::prefix('keuangan')->group(function () {
            Route::get('/', [KeuanganController::class, 'index'])->name('admin.keuangan');
            Route::get('/pembayaran', [KeuanganController::class, 'pembayaran'])->name('admin.keuangan.pembayaran');
            Route::post('/store', [KeuanganController::class, 'store'])->name('admin.keuangan.store');
            Route::post('/setting', [KeuanganController::class, 'update_setting'])->name('admin.keuangan.setting.update');
            Route::get('/setting', [KeuanganController::class, 'setting'])->name('admin.keuangan.setting');
            Route::get('/riwayat', [KeuanganController::class, 'riwayat'])->name('admin.keuangan.riwayat');
            Route::get('/{no_kk}', [KeuanganController::class, 'show'])->name('admin.keuangan.detail');
            Route::put('/update', [KeuanganController::class, 'update_keuangan'])->name('admin.keuangan.update');
        });
        Route::get('/layanan', [LayananController::class, 'index'])->name('admin.layanan');
        Route::post('/layanan/store', [LayananController::class, 'store'])->name('admin.layanan.store');


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

        Route::post('/agenda/store', [AdminController::class, 'store_agenda'])->name('admin.agenda.store');
        Route::put('/agenda/update', [AdminController::class, 'update_agenda'])->name('admin.agenda.update');
        Route::get('/agenda/delete/{id}', [AdminController::class, 'delete_agenda'])->name('admin.agenda.delete');
    });
});

// login & logout route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/error', function () {
    return view('error');
})->name('error');
