<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman-utama');
});

Route::get('/mahasiswa', function() {
    return view('pages.mahasiswa');
});