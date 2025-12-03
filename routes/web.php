<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect()->route('home.index');
});

// route ke resource MahasiswaController
Route::resource('home', HomeController::class);
