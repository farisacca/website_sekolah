<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilSekolahController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EkstrakulikulerController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;


Route::get('/', function () {
    return view('index');
});

Route::get('/profil', action: [ProfilSekolahController::class, 'index'])->name('admin.profil');
Route::get('/berita', action: [BeritaController::class, 'index'])->name('admin.berita');
Route::get('/ekstrakulikuler', action: [EkstrakulikulerController::class, 'index'])->name('admin.ekstrakulikuler');
Route::get('/galeri', action: [GaleriController::class, 'index'])->name('admin.galeri');
Route::get('/guru', action: [GuruController::class, 'index'])->name('admin.guru');
Route::get('/siswa', action: [SiswaController::class, 'index'])->name('admin.siswa');
