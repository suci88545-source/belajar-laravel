<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

 //route dasar
 //Route::get('/surat-masuk', function () {
   // return 'Daftar surat masuk';
//})->name('surat-masuk.index');

 //route dengan parameter
 //Route::get('/surat-masuk/{id}', function ($id) {
   // return 'Detail surat masuk dengan ID :' .$id;
//})->name('surat-masuk.show');

//route controller
 Route::get('/surat-masuk', [SuratMasukController:: class,'index']) 
->name('surat-masuk.index');

//route
 Route::get('/surat-masuk/{id}', [SuratMasukController:: class,'show']) 
->name('surat-masuk.show');

//route controller keluar
Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])
    ->name('surat-keluar.index');

Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])
    ->name('surat-keluar.show');
