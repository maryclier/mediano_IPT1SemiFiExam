<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home/Dashboard');
});

Route::get('/', function () {
    return view('Books List');
});

Route::get('/', function () {
    return view('Add Book');
});