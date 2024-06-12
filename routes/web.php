<?php

use App\Http\Controllers\Auths;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// Routing Auth
Route::prefix('auth')->group(function () {
    Route::view('login', 'auth.login', ['title' => 'Login'])->name('login');
    Route::post('login', [Auths::class, 'login']);
    Route::view('registrasi', 'auth.register', ['title' => 'Registrasi'])->name('register');
    Route::post('registrasi', [Auths::class, 'registrasi']);
    Route::post('logout', [Auths::class, 'logout'])->name('logout');
});

Route::view('/', 'beranda', ['title' => 'Beranda'])->name('beranda');
Route::view('tabel', 'tabel', ['title' => 'Tabel'])->name('tabel');
