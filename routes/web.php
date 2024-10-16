<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faleconosco', function () {
    return view('faleconosco');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/artigos', function () {
    return view('artigos');
});
