<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .certificate-container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border: 10px solid #4CAF50;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            position: relative;
        }

        .certificate-header {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .certificate-subheader {
            font-size: 18px;
            font-style: italic;
            color: #555555;
            margin-bottom: 20px;
        }

        .certificate-content {
            margin: 20px 0;
        }

        .certificate-content h1 {
            font-size: 28px;
            color: #333333;
            margin-bottom: 10px;
        }

        .certificate-content p {
            font-size: 18px;
            color: #555555;
            margin: 5px 0;
        }

        .certificate-footer {
            position: relative;
            height: 150px; /* Tinggi container footer */
            margin-top: 50px;
        }

        .signature-left {
            position: absolute;
            left: 50px; /* Geser ke kiri */
            bottom: 0;
            text-align: center;
        }

        .signature-right {
            position: absolute;
            right: 50px; /* Geser ke kanan */
            bottom: 0;
            text-align: center;
        }

        .signature-line {
            width: 150px;
            height: 1px;
            background: #333333;
            margin: 10px auto;
        }

        .logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 100px;
        }

        .footer-note {
            font-size: 14px;
            color: #777777;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="certificate-container">
        <img src="assets/img/logo/distylogo.png" alt="Logo" class="logo">
        <div class="certificate-header">Sertifikat Penyelesaian</div>
        <div class="certificate-subheader">Dengan ini diberikan kepada</div>

        <div class="certificate-content">
            <h1>{{ $enrollment->name }}</h1>
            <p>atas keberhasilannya menyelesaikan</p>
            <h2>{{ $enrollment->paket }}</h2>
            <p>pada tanggal {{ now()->format('d F Y') }}</p>
        </div>

        <div class="certificate-footer">
            <!-- TTD Instruktur (Kiri) -->
            <div class="signature-left">
                <div class="signature-line"></div>
                <p>TTD</p>
                <p>Instruktur</p>
            </div>

            <!-- TTD Koordinator Pelatihan (Kanan) -->
            <div class="signature-right">
                <div class="signature-line"></div>
                <p>TTD</p>
                <p>Koordinator Pelatihan</p>
            </div>
        </div>

        <div class="footer-note">
            Terima kasih atas partisipasi Anda! Untuk pertanyaan, hubungi kami di support@example.com
        </div>
    </div>
</body>
</html>
