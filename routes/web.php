<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halaman-utama');
});

Route::get('/mahasiswa', function() {


    $mahasiswa = Mahasiswa::query()->get();


    return view('pages.mahasiswa', compact('mahasiswa'));
});