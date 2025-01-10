<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function showForm()
    {
        $enrollment = Enrollment::where('user_id', Auth::id())->first();

        if (!$enrollment) {
            return redirect('/courses')->with('error', 'Anda harus melakukan pendaftaran terlebih dahulu!');
        }

        return view('pembayaran', [
            'name' => $enrollment->name,
            'email' => $enrollment->email,
            'contact' => $enrollment->contact,
            'paket' => $enrollment->paket,
        ]);
    }

    // Menyimpan bukti pembayaran
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
        }

        $enrollment = Enrollment::where('user_id', Auth::id())->first();
        if ($enrollment) {
            $enrollment->image = $path;
            $enrollment->save();
        }

        return redirect('/pelatihan')->with('success', 'Bukti pembayaran berhasil diunggah.');
    }
}
