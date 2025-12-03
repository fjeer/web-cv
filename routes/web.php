<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KursusController;

Route::get('/', function () {
    return redirect()->route('home.index');
});

Route::get('/kursus', function () {
    return redirect()->route('kursus.index');
});

// route ke resource MahasiswaController
Route::resource('home', HomeController::class);
Route::resource('kursus', KursusController::class);
