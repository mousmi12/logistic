<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
Route::get('/service', function () {
    return view('service');
})->name('service');
Route::get('/findus', function () {
    return view('findus');
})->name('findus');
