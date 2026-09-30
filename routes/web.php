<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Home",
        "name" => "Zidni Faradisa",
        "nim" => "13242520009",
        "prodi" => "S1 Teknologi Informasi",
        "gambar" => "zyd.jpg"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "berita"
    ]);
});

Route::get('/Contact', function () {
    return view('contact', [
        "title" => "contact"
    ]);
});