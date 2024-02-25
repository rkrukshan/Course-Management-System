<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\TeacherController;
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
Route::get('/about', function () {
    return view('about');
});

Route::get('/student', function () {
    return view('student.create');
});
Route::get('/course', function () {
    return view('course.index');
});
Route::get('/teacher', function () {
    return view('teacher.index');
});


route::resource('student',StudentController::class);
route::resource('teacher',TeacherController::class);
route::resource('course',CourseController::class);
route::resource('studentCourse',StudentCourseController::class);




