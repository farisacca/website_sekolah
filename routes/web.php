<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;


// Route::get('/', function () {
//     return view('index');
// });

Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'index'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'processLogin'])->name('admin.process_login');
});
Route::get('/', action: [DashboardController::class, 'indexPublic'])->name('public.dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', action: [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profil', action: [ProfilSekolahController::class, 'index'])->name('admin.profil');
    Route::get('/berita', action: [BeritaController::class, 'index'])->name('admin.berita');
    Route::get('/ekstrakulikuler', action: [EkstrakulikulerController::class, 'index'])->name('admin.ekstrakulikuler');
    Route::get('/galeri', action: [GaleriController::class, 'index'])->name('admin.galeri');
    Route::get('/guru', action: [GuruController::class, 'index'])->name('admin.guru');
    Route::get('/siswa', action: [SiswaController::class, 'index'])->name('admin.siswa');
});

