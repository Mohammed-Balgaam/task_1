<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/home', App\Http\Controllers\HomeController::class);
// Route::resource('/courses/store', [App\Http\Controllers\CourseController::class, 'store']);
Route::resource('/courses', App\Http\Controllers\CourseController::class);



