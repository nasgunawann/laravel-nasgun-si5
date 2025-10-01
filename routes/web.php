<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello Laravel";
});

Route::get('/about', function () {
    return "Ini adalah halaman <b>About</b>";
});

Route::get('/mahasiswa', function () {
    return "Ini adalah halaman <b>Mahasiswa</b>";
});

Route::get('/profile', function () {
    $nama = "Nasrullah Gunawan";
    return "Ini adalah halaman <b>Profile</b>. Nama saya adalah " . $nama;
});
