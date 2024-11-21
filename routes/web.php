<?php

use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MisterMissSumselController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('b_management', ["title" => "B Management"]);
})->name('b_management');

Route::get('/b-model-school', function () {
    return view('b_model' , ["title" => "B Model School"]);
})->name('b_model_school');

Route::get('/mister-miss-sumsel', [MisterMissSumselController::class, 'index'])->name('mistermiss_sumsel');
Route::get('/mister-miss-sumsel/finalis', [MisterMissSumselController::class, 'finalis'])->name('mistermiss_sumsel_finalis');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita/{id}', [BeritaController::class, 'display'])->name('berita-display');

Route::get('/contact', function () {
    return view('contact');
});


Route::middleware('guest')->group(function () {
    Route::get('/admin/dashboard', [AuthUserController::class, 'index'])->name('admin-login');
    Route::post('/admin/dashboard', [AuthUserController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/admin/dashboard/logout', [AuthUserController::class, 'logout'])->name('admin-logout');

    Route::get('/admin/dashboard/berita', [BeritaController::class, 'dashboard'])->name('admin-berita');
    Route::get('/admin/dashboard/berita/insert', [BeritaController::class, 'formInsertBerita'])->name('insert-berita');
    Route::post('/admin/dashboard/berita/insert', [BeritaController::class, 'insertBerita']);
    Route::get('/admin/dashboard/berita/update/{id}', [BeritaController::class, 'formUpdateBerita'])->name('update-berita');
    Route::post('/admin/dashboard/berita/update/{id}', [BeritaController::class, 'updateBerita']);
    Route::delete('/admin/dashboard/berita', [BeritaController::class, 'deleteBerita'])->name('delete-berita');
});
