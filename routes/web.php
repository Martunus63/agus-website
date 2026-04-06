<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/jadwal-sholat', function () {
    return view('jadwal-sholat');
})->name('jadwal-sholat');

Route::get('/jadwal-ramadhan', function () {
    return view('jadwal-ramadhan');
})->name('jadwal-ramadhan');

Route::get('/amalan', function () {
    return view('amalan');
})->name('amalan');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/lebaran', function () {
    return view('lebaran');
})->name('lebaran');
