<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CertificateController;

    Route::get('/', function () {
        return view('index');
    });

    Route::get('/register', function () {
        return view('register');
    })->middleware('guest');

    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    Route::get('/welcome', function () {
        return view('welcome');
    });

    //rute courses
    Route::get('/courses', function () {
        return view('courses');
    })->middleware('auth');
    
    Route::get('/courses', [CourseController::class, 'index'])->name('courses')->middleware('auth');
    
    Route::get('/enrollment/{course_id}', [EnrollmentController::class, 'create'])->name('enrollment.create');
    
    Route::post('/enrollment', [EnrollmentController::class, 'store'])->name('enrollment.store');

    //rute about
    Route::get('/about', function () {
        return view('about');
    })->middleware('auth');

    //rute contact
    Route::get('/contact', function () {
        return view('contact');
    })->middleware('auth');

    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

    //rute sertifikat

    Route::get('/certificates', [CertificateController::class, 'show'])->name('certificate')->middleware('auth');
    Route::get('/certificates/{id}/download', [CertificateController::class, 'download'])->name('certificate.download');
    
    Route::post('/logout', [UserController::class, 'logout'])->name('user.logout')->middleware('auth');


    // Route::middleware(['admin.only'])->group(function () {
    //     Route::get('/admin', [FilamentController::class, 'index']);
    //     // Tambahkan rute lain yang memerlukan akses admin
    // });
    