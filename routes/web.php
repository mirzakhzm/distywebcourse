<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/contact', function () {
    return view('contact');
});


//user
Route::post('/register', action: [UserController::class, 'register'])->name('user.register');
Route::post('/login', action: [UserController::class, 'login'])->name('user.login');
