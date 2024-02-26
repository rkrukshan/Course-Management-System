<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\TeacherController;
use App\Models\StudentCourse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
route::resource('student',StudentController::class);
route::resource('teacher',TeacherController::class);
route::resource('course',CourseController::class);
route::resource('studentCourse',StudentCourseController::class);
Route::get('/apply', [CourseController::class, 'apply'])->name('apply');
Route::get('/accept/{id}', [CourseController::class, 'accept_approval'])->name('accept');
Route::get('/reject/{id}', [CourseController::class, 'reject_approval'])->name('reject');






