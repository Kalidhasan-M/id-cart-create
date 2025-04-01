<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/id-form', function () {
    return view('idform');
});
Route::get('/templates', function () {
    return view('templates');
});