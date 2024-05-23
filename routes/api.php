<?php

use App\Http\Controllers\Admin\BansosController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\AgendaController;
use App\Http\Controllers\Api\BeritaController;
use App\Http\Controllers\Api\PendudukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/kk/{no_kk}', [PendudukController::class, 'getPendudukByKK']);
Route::get('/bansos/saw', [BansosController::class, 'method_saw']);
Route::get('/bansos/ahp', [BansosController::class, 'method_ahp']);

Route::put('/agenda/update', [AdminController::class, 'update_draggable_agenda']);

Route::post('/agenda', [AgendaController::class, 'index']);