<?php

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
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact' => 'required|numeric',
            'paket' => 'required|string',
            'course_id' => 'required|exists:courses,id',
            'payment_proof' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048', // Validasi untuk file bukti pembayaran
        ]);

        // Upload bukti pembayaran
        if ($request->hasFile('payment_proof')) {
            $file = $request->file('payment_proof');
            $filePath = $file->store('payment_proofs', 'public'); // Simpan di storage/public/payment_proofs
            $validated['payment_proof'] = $filePath;
        }
    
        // Simpan data pendaftaran ke database
        Enrollment::create($validated);    
        // Redirect ke halaman sukses
        return redirect('/courses')->with('success', 'Pendaftaran berhasil!');
    }
    
}
