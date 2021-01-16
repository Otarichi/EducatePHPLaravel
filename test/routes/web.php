<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\CategoryController;

Route::name('front.')->group(function () {
    Route::get('/', [PageController::class, 'index'] );
    Route::get('/post/{slug}', [PageController::class, 'singlePost'])->name('single-post');
    Route::get('/category/{slug}', [PageController::class, 'category'])->name('category');
});

Route::name('admin.')->prefix('admin')->middleware('custom_auth')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('home');
    Route::resource('/post', PostController::class);
    Route::resource('/category', CategoryController::class);
});

Route::prefix('custom')
  ->name('custom.')
  ->group(function () {
    Route::post('/login', [AuthController::class, 'customLogin'])->name('login')->middleware('custom_guest');
    Route::post('/register', [AuthController::class, 'customRegister'])->name('register')->middleware('custom_guest');
    Route::post('/logout', [AuthController::class, 'customLogout'])->name('logout')->middleware('custom_auth');
  });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
