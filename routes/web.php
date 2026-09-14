<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AppController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AppController::class, 'login'])->name('login.perform');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/berita', function () {
    return view('news');
});

Route::get('/berita/detail', function () {
    return view('information');
});