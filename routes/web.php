<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
})->name('dashboard');

Route::get('/report', function () {
    return view('Report'); 
})->name('report');

Route::get('/statistics', function () {
    return view('Statistics');
})->name('statistics');

Route::get('/articles', function () {
    return view('Articles'); 
})->name('articles');