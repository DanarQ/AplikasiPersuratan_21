<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
    Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'registerPost'])->name('register');
    Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'loginPost'])->name('login');
});

Route::middleware('auth', 'user-access:admin')->name('admin.')->group(function () {
    Route::resource('/admin/User', \App\Http\Controllers\UserController::class);
    Route::resource('/admin/Kepala_surat', \App\Http\Controllers\BarangController::class);
    Route::resource('/admin/Surat_keluar', \App\Http\Controllers\CustomerController::class);
    Route::resource('/admin/Surat_masuk', \App\Http\Controllers\KeluhanController::class);
    Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin');
    Route::delete('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
  });
  Auth::routes();
Route::resource('/pengguna',\App\Http\Controllers\UserController::class);
Route::resource('/kepalasurat',\App\Http\Controllers\KepalaSuratController::class);