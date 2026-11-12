<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return print('Bienvenido a la página principal de PeliSpot.');
});
