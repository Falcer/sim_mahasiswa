<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get(
    '/course',
    [CourseController::class, 'index']
)->middleware(['auth'])->name('course');

Route::get(
    '/student',
    [StudentController::class, 'index']
)->middleware(['auth'])->name('student');


require __DIR__.'/auth.php';
