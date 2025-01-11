<?php

// app/Http/Controllers/EnrollmentController.php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    
        // Membuat objek Enrollment baru
        $enrollment = new Enrollment();
        $enrollment->name = $request->input('name');
        $enrollment->email = $request->input('email');
        $enrollment->contact = $request->input('contact');
        $enrollment->paket = $request->input('paket');
        $enrollment->course_id = $request->input('course_id');
        $enrollment->user_id = Auth::id();  // Menyertakan user_id yang sedang login
    
        // Simpan data pendaftaran ke database
        $enrollment->save();
    
        // Redirect ke halaman sukses
        return redirect('/pembayaran')->with('success', 'Pendaftaran berhasil!');
    }
    
    public function index()
    {
        // Mengambil data enrollment hanya untuk user yang sedang login dan melakukan eager loading untuk course
        $enrollments = Enrollment::with('course')->where('user_id', Auth::id())->get();

    // Menampilkan pesan jika tidak ada enrollment
    if ($enrollments->isEmpty()) {
        // Menambahkan pesan 'Anda belum enroll' yang akan ditampilkan di view
        $message = 'Anda belum enroll pada kursus manapun.';
    } else {
        $message = null; // Tidak ada pesan jika ada data enrollment
    }
    // Mengirim data ke view 'pelatihan'
    return view('pelatihan', compact('enrollments', 'message'));
    }
}
