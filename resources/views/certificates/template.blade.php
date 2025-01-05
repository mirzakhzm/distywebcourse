<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .certificate {
            border: 10px solid #000;
            padding: 50px;
            position: relative;
        }
        .header {
            font-size: 24px;
            font-weight: bold;
        }
        .content {
            margin-top: 50px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <div class="header">Certificate of Completion</div>
        <div class="content">
            This certificate is awarded to:<br>
            <strong>{{ $enrollment->name }}</strong><br>
            For completing the course:<br>
            <strong>{{ $enrollment->paket }}</strong><br>
            Date: {{ now()->format('F d, Y') }}
        </div>
    </div>
</body>
</html>
