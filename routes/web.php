<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mistermiss.index', ['title' => 'Mister Miss Sumsel']);
});
