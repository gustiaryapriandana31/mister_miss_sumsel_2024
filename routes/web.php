<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MisterMissSumselController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('management.b_management', ["title" => "B Management"]);
})->name('b_management');

Route::get('/models-school', function () {
    return view('management.b_models_school' , ["title" => "B Model School"]);
})->name('b_models_school');

Route::get('/mister-miss-sumsel', [MisterMissSumselController::class, 'index'])->name('mistermiss_sumsel');
Route::get('/mister-miss-sumsel/finalis', [MisterMissSumselController::class, 'finalis'])->name('mistermiss_sumsel_finalis');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

Route::get('/contact', function () {
    return view('contact');
});
