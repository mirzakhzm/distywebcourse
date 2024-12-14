<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller

{
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Simpan ke database
        Feedback::create($validated);

        // Redirect atau pesan sukses
        return redirect('contact')->back()->with('success', 'Feedback berhasil dikirim!');
    }
}
