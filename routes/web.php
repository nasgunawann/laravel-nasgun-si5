<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "
    <h1>Halaman Home</h1>
    <a href='/about'>About</a>
    <br>
    <a href='/profile'>Profile</a>
    ";
});

Route::get('/about', function () {
    return "
    <h1>Halaman About</h1>
    <a href='/'>Home</a>
    <br>
    <a href='/profile'>Profile</a>
    ";
});

Route::get('/profile', function () {
    return "
    <h1>Halaman Profile</h1>
    <a href='/'>Home</a>
    <br>
    <a href='/profile'>Profile</a>
    ";
});
