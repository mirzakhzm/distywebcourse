<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Certificate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;


class CertificateController extends Controller
{
    public function show()
    {
    // Ambil pengguna yang terautentikasi dan sertifikat terkait
    $user = auth::user();
    $certificates = $user->certificates;  // Mengambil sertifikat terkait pengguna
        
        // Return view with certificates data
        return view('certificates', compact('certificates'));
    }

    // Mengunduh sertifikat
    public function download($id)
    {
        // Mencari data certificate berdasarkan ID
        $certificate = Certificate::findOrFail($id);
    
        // Mengambil file path dari kolom file di database
        $filePath = public_path($certificate->file); // pastikan path-nya sesuai dengan folder public
    
        // Cek apakah file ada
        if (file_exists($filePath)) {
            // Menambahkan header untuk tipe konten gambar
            $headers = [
                'Content-Type' => mime_content_type($filePath),
            ];
    
            // Mengunduh file dengan benar
            return response()->download($filePath, null, $headers);
        }
    
        return redirect()->back()->with('error', 'Certificate file not found.');
    }
    
    public function generateCertificate($id)
    {
        $enrollment = Enrollment::findOrFail($id);

        // Generate PDF
        $pdf = Pdf::loadView('certificates.template', ['enrollment' => $enrollment]);

        // Unduh file PDF
        $fileName = 'Certificate_' . $enrollment->name . '.pdf';
        return $pdf->download($fileName);
    }
}
