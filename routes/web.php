<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/Profil', function () {
    return view('profil');
});
