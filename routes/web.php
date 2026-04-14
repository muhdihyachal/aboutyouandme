<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman Utama (menggunakan file welcome.blade.php)
Route::get('/', function () {
    return view('welcome'); 
});

// Route untuk halaman Galeri (menggunakan file gallery.blade.php)
Route::get('/gallery', function () {
    return view('gallery'); 
});