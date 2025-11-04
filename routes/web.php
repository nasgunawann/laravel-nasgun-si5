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

Route::get('/produk', function () {
    $produk = [
        ['kode' => 'BG001', 'nama' => 'Pena', 'jenis' => 'Alat tulis', 'harga' => 20000],
        ['kode' => 'BG002', 'nama' => 'Buku', 'jenis' => 'Alat tulis', 'harga' => 15000],
    ];
    return view('produk', compact('produk'));
});
