<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('b_management_page');
});

Route::get('/model', function () {
    return view('b_model_page');
});

Route::get('/contact', function () {
    return view('contact');
});