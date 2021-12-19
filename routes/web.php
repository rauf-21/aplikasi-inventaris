<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn () => view('index'))->name('home');

Route::post('/login', [PetugasController::class, 'login'])->name('login');

Route::get('/logout', [PetugasController::class, 'logout'])->name('logout');

Route::prefix('admin')
  ->middleware('check_level')
  ->group(function () {
    Route::get('/dashboard', fn () => view('admin/dashboard'))->name('admin.dashboard');
    Route::prefix('data')->group(function () {
      Route::get('/ruang', fn () => view('admin/data/ruang'))->name('admin.data.ruang');
      Route::get('/jenis', fn () => view('admin/data/jenis'))->name('admin.data.jenis');
      Route::get('/level', fn () => view('admin/data/level'))->name('admin.data.level');
      Route::get('/pegawai', fn () => view('admin/data/pegawai'))->name('admin.data.pegawai');
      Route::get('/petugas', fn () => view('admin/data/petugas'))->name('admin.data.petugas');
      Route::get('/inventaris', fn () => view('admin/data/inventaris'))->name('admin.data.inventaris');
      Route::get('/peminjaman', fn () => view('admin/data/peminjaman'))->name('admin.data.peminjaman');
      Route::get('/detail-pinjam', fn () => view('admin/data/detail-pinjam'))
        ->name('admin.data.detail_pinjam');
    });
  });
