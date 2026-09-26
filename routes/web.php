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

Route::get('/login', [AuthController::class, 'index'])
    ->name('admin.login');

Route::post('/login', [AuthController::class, 'processLogin'])
    ->name('admin.process_login');

Route::middleware('checkAuth')->group(function () {

    Route::get('/', [DashboardController::class, 'indexPublic'])
        ->name('public.dashboard');

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/berita', [BeritaController::class, 'index'])->name('admin.berita');

        Route::get('/galeri', [GaleriController::class, 'index'])->name('admin.galeri');

    Route::prefix('guru')->group(function () {

            Route::get('/', [GuruController::class, 'index'])->name('admin.guru');
            Route::get('/create', [GuruController::class, 'create'])->name('admin.guru.create');
            Route::post('/', [GuruController::class, 'store'])->name('admin.guru.store');
            Route::get('/{id_guru}/edit', [GuruController::class, 'edit'])->name('admin.guru.edit');
            Route::put('/{id_guru}', [GuruController::class, 'update'])->name('admin.guru.update');
            Route::delete('/{id_guru}', [GuruController::class, 'destroy'])->name('admin.guru.destroy');
        });

        Route::prefix('siswa')->group(function () {
            Route::get('/', [SiswaController::class, 'index'])->name('admin.siswa');
            Route::get('/create', [SiswaController::class, 'create'])->name('admin.siswa.create');
            Route::post('/', [SiswaController::class, 'store'])->name('admin.siswa.store');
            Route::get('/{id_siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.siswa-edit');
            Route::put('/{id_siswa}', [SiswaController::class, 'update'])->name('siswa.update');
            Route::delete('/{id_siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
        });

        Route::prefix('profil')->group(function () {
            Route::get('/', [ProfilSekolahController::class, 'index'])->name('admin.profil');
            Route::get('/{id_profil}/edit', [ProfilSekolahController::class, 'edit'])->name('profil.edit');
        });

        Route::prefix('ekstrakulikuler')->group(function () {

            Route::get('/', [EkstrakulikulerController::class, 'index'])->name('admin.ekstrakulikuler');
            Route::get('/create', [EkstrakulikulerController::class, 'create'])->name('admin.ekstrakulikuler.create');
            Route::post('/', [EkstrakulikulerController::class, 'store'])->name('admin.ekstrakulikuler.store');
            Route::get('/{id_eskul}/edit', [EkstrakulikulerController::class, 'edit'])->name('admin.ekstrakulikuler.edit');
            Route::put('/{id_eskul}', [EkstrakulikulerController::class, 'update'])->name('admin.ekstrakulikuler.update');
            Route::delete('/{id_eskul}', [EkstrakulikulerController::class, 'destroy'])->name('admin.ekstrakulikuler.destroy');

        });

    });

});