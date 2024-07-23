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

  Auth::routes();
Route::resource('/pengguna',\App\Http\Controllers\UserController::class);
Route::resource('/kepalasurat',\App\Http\Controllers\KepalaSuratController::class);