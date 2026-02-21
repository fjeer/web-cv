<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\TrainingController;

Route::get('/', function () {
    return redirect()->route('home.index');
});

Route::get('/kursus', function () {
    return redirect()->route('kursus.index');
});
Route::get('/training', function() {
    return redirect()->route('training.index');
});
Route::get('/event', function () {
    return redirect()->route('event.index');
});
Route::get('/berita', function () {
    return redirect()->route('berita.index');
});
Route::get('/industri', function () {
    return redirect()->route('industri.index');
});
Route::get('/daftar', function () {
    return redirect()->route('daftar.index');
});



Route::resource('home', HomeController::class);
Route::resource('kursus', KursusController::class);
Route::resource('event', EventController::class);
Route::resource('berita', BeritaController::class);
Route::resource('industri', IndustriController::class);
Route::resource('training',TrainingController::class);
Route::resource('daftar',DaftarController::class);


// Testing
Route::get('/test-email', function () {
    $pendaftaran = App\Models\Daftar::where('no_daftar','260Y1')->first(); // Ambil satu contoh data
    $user = App\Models\User::where('role_id',1)->first(); // Ambil satu contoh user
    return (new App\Notifications\PendaftarBaru($pendaftaran))
        ->toMail($user);
});