<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/app');
});

Auth::routes(['verify' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

