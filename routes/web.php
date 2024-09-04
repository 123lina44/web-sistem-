<?php

use App\Http\Controllers\DahsboardController;
use App\Http\Controllers\DataKamarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\NarasiController;
use App\Http\Controllers\PenyewaController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\TestimoniCcontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/datakamar/detail-kamar/{slug}', [HomeController::class, 'detailkamar']);
Route::resource('home', HomeController::class);
Route::resource('kamar', KamarController::class);
Route::resource('kontak', KontakController::class);
Route::resource('tentang_kami', TentangKamiController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard.index');
    Route::resource('dashboard', DahsboardController::class);
    Route::resource('datakamar', DataKamarController::class);
    Route::post('image-upload', [DataKamarController::class, 'storeImage'])->name('image.upload');
    Route::resource('narasi', NarasiController::class);
    Route::resource('penyewa', PenyewaController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('testimoni', TestimoniCcontroller::class);
});
