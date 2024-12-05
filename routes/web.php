<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\FeedbackController;
use App\Models\Feedback;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/courses', function () {
    return view('courses');
});
Route::get('/enroll', function () {
    return view('enroll');
});

Route::get('/contact', function () {
    return view('contact');
});


//user
Route::post('/register', action: [UserController::class, 'register'])->name('user.register');
Route::post('/login', action: [UserController::class, 'login'])->name('user.login');


//course
Route::get('/courses', [CourseController::class, 'index'])->name('courses');

//enroll
Route::get('/enrollment/{course_id}', [EnrollmentController::class, 'create'])->name('enrollment.create');
Route::post('/enrollment', [EnrollmentController::class, 'store'])->name('enrollment.store');

//feedback
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');