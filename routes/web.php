<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');