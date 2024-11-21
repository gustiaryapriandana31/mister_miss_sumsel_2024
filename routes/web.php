<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('management.b_management_page', ["title" => "B Management"]);
})->name('b_management');

Route::get('/models-school', function () {
    return view('management.b_models_school' , ["title" => "B Models School"]);
})->name('b_models_school');

Route::get('/mister-miss-sumsel', function () {
    return view('mistermiss.index', ["title" => "Mister Miss Sumsel"]);
})->name('mistermiss_sumsel');

Route::get('/berita', function () {
    return view('mistermiss.index', ["title" => "Berita"]);
})->name('berita');

Route::get('/contact', function () {
    return view('contact');
});
