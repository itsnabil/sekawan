<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilTokoController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

// Routing Auth
Route::middleware('guest')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::view('login', 'auth.login', ['title' => 'Login'])->name('login');
        Route::view('registrasi', 'auth.register', ['title' => 'Registrasi'])->name('register');
        Route::post('login', [AuthController::class, 'login']);
        Route::post('registrasi', [AuthController::class, 'registrasi']);
    });
});

Route::middleware('auth')->group(function () {
    // Routing Page + Logout
    Route::get('/', [BerandaController::class, 'index'])->name('beranda');
    Route::view('tabel', 'tabel', ['title' => 'Tabel'])->name('tabel');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    // Routing Admin
    Route::prefix('admin')->group(function () {
        Route::resource('profil', ProfilController::class);
        // Route::resource('profil-toko', ProfilTokoController::class);
    });
});
