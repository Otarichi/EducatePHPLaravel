<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\mainController@main_view')->name('main');

Route::get('companies', 'App\Http\Controllers\companieController@get_companies')->name('companies');
Route::post('companies/delete', 'App\Http\Controllers\companieController@delete_companie')->name('companies.delete');
Route::get('companies/add', 'App\Http\Controllers\companieController@add_companie')->name('companies.add');
Route::post('companies/insert', 'App\Http\Controllers\companieController@insert_companie')->name('companies.insert');
Route::get('companies/edit', 'App\Http\Controllers\companieController@edit_companie')->name('companies.edit');
Route::post('companies/update', 'App\Http\Controllers\companieController@update_companie')->name('companies.update');


Route::get('employees', 'App\Http\Controllers\employeeController@get_employees')->name('employees');
Route::post('employees/delete', 'App\Http\Controllers\employeeController@delete_employee')->name('employees.delete');
Route::get('employees/add', 'App\Http\Controllers\employeeController@add_employee')->name('employees.add');
Route::post('employees/insert', 'App\Http\Controllers\employeeController@insert_employee')->name('employees.insert');
Route::get('employees/edit', 'App\Http\Controllers\employeeController@edit_employee')->name('employees.edit');
Route::post('employees/update', 'App\Http\Controllers\employeeController@update_employee')->name('employees.update');



