<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', ['title' => 'Beranda']);
});

Route::get('/tabel', function () {
    return view('tabel', ['title' => 'Tabel']);
});
