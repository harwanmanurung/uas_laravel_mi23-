<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fashion Hub - Katalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            /* Background Toko Baju yang Estetik */
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?q=80&w=2070');
            
            /* DIBUAT 100% SUPAYA BG TERLIHAT LUAS/JAUH */
            background-size: 100% 100%; 
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

        /* --- TAMBAHAN BARU SUPAYA INPUT TIDAK HITAM --- */
        
        /* Mengubah warna teks saat mengetik di input jadi putih */
        .form-control {
            color: white !important;
        }

        /* Mengubah warna placeholder (tulisan bantuan) jadi putih pudar */
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.5) !important;
        }

        /* Efek saat kotak input diklik (fokus) */
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.15) !important;
            border-color: #0dcaf0 !important; /* Warna biru cyan */
            color: white !important;
            box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.25);
        }

        /* Menghilangkan background putih bawaan browser saat input aktif */
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