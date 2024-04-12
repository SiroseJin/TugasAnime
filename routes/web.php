<?php

use App\Http\Controllers\animecontroller;
use App\Models\animelist;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/list', [animecontroller::class, 'index'])->name('list');

Route::resource('anime', animecontroller::class);
