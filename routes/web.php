<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    $nama = 'Nasrullah Gunawan';
    // return view('profile', compact('nama'));
    return view('about')->with('nama', $nama);
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/profile', function () {
    return view('profile');
});
