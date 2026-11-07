<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\Auth\LoginController;

// Route Login
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.submit');
});

// Route setelah login
Route::middleware('auth')->group(function () {

    Route::get('/', fn () => view('dashboard'))
        ->name('dashboard');

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');

    // Resource Surat Masuk P4
    Route::resource('surat-masuk', SuratMasukController::class)
        ->except(['index', 'show'])
        ->parameters(['surat-masuk' => 'id']);

     Route::resource('surat-masuk', SuratMasukController::class)
        ->only(['index', 'show'])
        ->parameters(['surat-masuk' => 'id']);


    // Route Surat Keluar P4
    Route::resource('surat-keluar', SuratKeluarController::class)
        ->parameters(['surat-keluar' => 'id']);
});