<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return redirect()->route('home.index');
});

Route::get('/kursus', function () {
    return redirect()->route('kursus.index');
});
Route::get('/event', function () {
    return redirect()->route('event.index');
});
Route::get('/berita', function () {
    return redirect()->route('berita.index');
});

// route ke resource MahasiswaController
Route::resource('home', HomeController::class);
Route::resource('kursus', KursusController::class);
Route::resource('event', EventController::class);
Route::resource('berita', BeritaController::class);
