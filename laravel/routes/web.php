<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WaliMuridController;

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

Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/delete/{id}', [SiswaController::class, 'destroy']);
Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/update', [SiswaController::class, 'update'])->name('siswa.update');


Route::get('/wali', [WaliMuridController::class, 'index'])->name('wali.index');
Route::get('/wali/delete/{id}', [WaliMuridController::class, 'destroy']);
Route::get('/wali/create', [WaliMuridController::class, 'create']);
Route::post('/wali', [WaliMuridController::class, 'store']);
Route::get('/wali/edit/{id}', [WaliMuridController::class, 'edit'])->name('wali.edit');
Route::put('/wali/update', [WaliMuridController::class, 'update'])->name('wali.update');


Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/delete/{id}', [KelasController::class, 'destroy']);
Route::get('/kelas/create', [KelasController::class, 'create']);
Route::post('/kelas', [KelasController::class, 'store']);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/update', [KelasController::class, 'update'])->name('kelas.update');