<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('b_management_page', ["title" => "B Management"]);
})->name('b_management');

Route::get('/b-model-school', function () {
    return view('b_model_page' , ["title" => "B Model School"]);
})->name('b_model_school');

Route::get('/mister-miss-sumsel', function () {
    return view('mistermiss.index', ["title" => "Mister Miss Sumsel"]);
})->name('mistermiss_sumsel');

Route::get('/berita', function () {
    return view('mistermiss.index', ["title" => "Berita"]);
})->name('berita');

Route::get('/contact', function () {
    return view('contact');
});
