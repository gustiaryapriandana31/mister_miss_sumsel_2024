<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/contact', function () {
    return view('contact');
});