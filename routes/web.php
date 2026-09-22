<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('utama');
});

Route::get('/halamandua', function () {
    return view('halamandua');
});