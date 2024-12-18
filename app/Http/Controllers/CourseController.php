<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses', compact('courses'));
    }
}
