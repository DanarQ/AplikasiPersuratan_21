<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/pengguna',\App\Http\Controllers\UserController::class);
Route::resource('/kepalasurat',\App\Http\Controllers\KepalaSuratController::class);