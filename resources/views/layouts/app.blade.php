<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Center - Katalog Perabotan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* Background Interior Perabotan yang Mewah (Sofa Hijau) */
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=2070');
            
            /* DIBUAT COVER SUPAYA GAMBAR PAS DI LAYAR */
            background-size: cover; 
            background-attachment: fixed;
            background-position: center;
            min-height: 100vh;

            /* AGAR SEMUA JUDUL & TEKS OTOMATIS PUTIH */
            color: white; 
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            color: white; 
        }

        /* Styling Input agar tidak hitam saat diketik */
        .form-control {
            color: white !important;
            background-color: rgba(255, 255, 255, 0.1) !important;
            border: 1px solid rgba(255, 255, 255, 0.3) !important;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        /* Efek saat kotak input diklik - WARNA EMAS/GOLD */
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.15) !important;
            border-color: #ffc107 !important; 
            color: white !important;
            box-shadow: 0 0 0 0.25rem rgba(255, 193, 7, 0.25);
        }

        /* Menghilangkan background putih bawaan browser */
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus {
            -webkit-text-fill-color: white !important;
            -webkit-box-shadow: 0 0 0px 1000px rgba(0,0,0,0.2) inset !important;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        @yield('content')
    </div>
</body>
</html>