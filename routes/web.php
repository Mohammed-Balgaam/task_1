<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('/home',HomeController::class);
Route::resource('/courses',CourseController::class);
Route::get('/addCourse', [CourseController::class , 'addCourse'] );
Route::get('/update/Course/{id}', [CourseController::class , 'updateCourse'] )->name('update.course');
Route::resource('/courses/{id}',CourseController::class);
// Route::resource('/courses/{id}',CourseController::class)->name('destroy','destroy.course');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('destroy.course');





