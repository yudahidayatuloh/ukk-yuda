<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $beritas = Berita::latest()->take(3)->get(); // ambil 3 berita terbaru
    return view('beranda', compact('beritas'));
});
Route::get('/Profil', function () {
    return view('profil');
});
Route::get('/Ekstrakulikuler', function () {
    return view('eskul');
});
Route::get('/Galeri', function () {
    return view('galeri');
});
