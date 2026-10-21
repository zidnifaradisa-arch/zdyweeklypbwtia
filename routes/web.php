<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;


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


Route::get('/berita',[BeritaController::class, 'tampilberita']);
Route::get('berita/{slug}', [Beritacontroller::class, 'tampilberitatunggal']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact"
    ]);
});