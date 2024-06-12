<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::view('/', 'beranda', ['title' => 'Beranda'])->name('beranda');
Route::view('tabel', 'tabel', ['title' => 'Tabel'])->name('tabel');
Route::view('auth/login', 'auth.login', ['title' => 'Login'])->name('login');
Route::view('auth/register', 'auth.register', ['title' => 'Registrasi'])->name('register');
