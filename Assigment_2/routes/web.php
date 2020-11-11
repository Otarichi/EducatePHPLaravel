<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\CarController@view_all_cars')->name('car.all');
Route::get('/create', 'App\Http\Controllers\CarController@view_add_new_car')->name('car.create');
Route::post('/insert', 'App\Http\Controllers\CarController@insert_new_car')->name('car.insert');
Route::get('/edit', 'App\Http\Controllers\CarController@view_edit_car')->name('car.edit');
Route::post('/update', 'App\Http\Controllers\CarController@update_car')->name('car.update');
