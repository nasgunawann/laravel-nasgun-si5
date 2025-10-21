<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    $nama = 'Nasrullah Gunawan';
    return view('about')->with('nama', $nama);
});

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/profile', function () {
    return view('profile');
});
