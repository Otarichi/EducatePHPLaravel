<?php

use Illuminate\Support\Facades\Route;

Route::get('/', '\App\Http\Controllers\pageController@Home');

Route::get('/Contact', '\App\Http\Controllers\pageController@Contact');

Route::get('/About', '\App\Http\Controllers\pageController@About');