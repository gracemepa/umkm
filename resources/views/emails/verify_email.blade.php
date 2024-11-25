<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Verifikasi Email' }}</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .email-header {
            background: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 8px 8px 0 0;
        }
        .email-body {
            padding: 20px;
            text-align: left;
            color: #333333;
        }
        .email-footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666666;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Verifikasi Email</h1>
        </div>
        <div class="email-body">
            <p>Halo, {{ $user->name }}</p>
            <p>Terima kasih telah mendaftar di aplikasi kami!</p>
            <p>Silakan klik link di bawah ini untuk memverifikasi email Anda</p>
            <a href="{{ route('verify.email', ['token' => $user->verification_token]) }}" class="btn">Klik untuk verifikasi</a>
            <p>Terima kasih,</p>
            <p>Tim Support</p>
        </div>
        <div class="email-footer">
            <p>Jika tombol di atas tidak berfungsi, salin dan tempelkan link berikut ke browser Anda:</p>
            <p>{{ route('verify.email', ['token' => $user->verification_token]) }}</p>
        </div>
    </div>
</body>
</html>
