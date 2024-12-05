<?php

// app/Http/Controllers/EnrollmentController.php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    // Menampilkan form enrollment berdasarkan course_id
    public function create($course_id)
    {
        $course = Course::findOrFail($course_id);
        return view('enrollment', compact('course'));
    }

    // Menyimpan data enrollment
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact' => 'required|numeric',
            'paket' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
        ]);

        // Simpan data enrollment
        Enrollment::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'contact' => $validated['contact'],
            'paket' => $validated['paket'],
            'course_id' => $validated['course_id'],
        ]);

        // Redirect atau pesan sukses setelah berhasil menyimpan
        return redirect()->route('courses')->with('success', 'You have successfully enrolled!');
    }
}
