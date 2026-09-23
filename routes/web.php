<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JurusanController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\EkstrakurikulerController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jurusan', [HomeController::class, 'jurusan'])->name('jurusan');
Route::get('/guru', [HomeController::class, 'guru'])->name('guru');
Route::get('/ekstrakurikuler', [HomeController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/berita/{berita:slug}', [HomeController::class, 'showBerita'])->name('berita.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('jurusan', JurusanController::class)->except(['show'])->parameters(['jurusan' => 'item']);
        Route::resource('guru', GuruController::class)->except(['show'])->parameters(['guru' => 'item']);
        Route::resource('ekstrakurikuler', EkstrakurikulerController::class)->except(['show'])->parameters(['ekstrakurikuler' => 'item']);
        Route::resource('berita', BeritaController::class)->except(['show'])->parameters(['berita' => 'item']);
    });
});
