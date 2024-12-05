<?php

namespace App\Http\Controllers;

use App\Models\Course;
// use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // Mengambil data dari database
        return view('courses', compact('courses')); // Menggunakan view 'courses.blade.php'
    }
    

}
