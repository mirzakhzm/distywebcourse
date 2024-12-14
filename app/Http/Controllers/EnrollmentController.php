<?php

// app/Http/Controllers/EnrollmentController.php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    // Menampilkan form enrollment berdasarkan course_id
    public function create(Request $request)
    {
        $course = Course::findOrFail($request->course_id);
    
        return view('enrollment', [
            'course' => $course
        ]);
    }
    
    // Menyimpan data enrollment
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|string',
            'paket' => 'required|string',
            'course_id' => 'required|exists:courses,id',
        ]);
    
        // Simpan data pendaftaran ke database
        Enrollment::create($validated);    
        // Redirect ke halaman sukses
        return redirect('/courses')->with('success', 'Pendaftaran berhasil!');
    }
    
}
