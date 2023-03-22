<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {
    return view('frontend.contactus');
});

Route::get('/landing', function () {
    return view('frontend.landingpage');
});

