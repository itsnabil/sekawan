<?php

use App\Http\Controllers\Auths;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// Routing Auth
Route::middleware('guest')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::view('login', 'auth.login', ['title' => 'Login'])->name('login');
        Route::post('login', [Auths::class, 'login']);
        Route::view('registrasi', 'auth.register', ['title' => 'Registrasi'])->name('register');
        Route::post('registrasi', [Auths::class, 'registrasi']);
    });
});

// Routing Page + Logout
Route::middleware('auth')->group(function () {
    Route::view('/', 'beranda', ['title' => 'Beranda'])->name('beranda');
    Route::view('tabel', 'tabel', ['title' => 'Tabel'])->name('tabel');
    Route::post('logout', [Auths::class, 'logout'])->name('logout');
});
