<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; border-right: 2px solid #000; }
        .nav-link { color: #000; border: 1px solid #000; margin-bottom: 5px; }
        .stat-box { border: 2px solid #000; padding: 20px; text-align: center; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar py-3">
                <nav class="nav flex-column">
                    <a class="nav-link bg-light" href="#">Beranda</a>
                    <a class="nav-link" href="#">Produk</a>
                    <a class="nav-link" href="#">Kategori</a>
                    <a class="nav-link" href="#">User</a>
                    <a class="nav-link" href="/login">Keluar</a>
                </nav>
            </div>

            <div class="col-md-10 py-4 px-5">
                <div class="border border-dark p-4" style="min-height: 80vh;">
                    <h2 class="fw-bold mb-5">Selamat Datang {{ $user_login }}</h2>

                    <div class="row gx-4">
                        <div class="col-md-4">
                            <div class="stat-box">
                                <h4 class="fw-bold">Produk</h4>
                                <h1 class="display-4 fw-bold">{{ $jumlah_produk }}</h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-box">
                                <h4 class="fw-bold">Kategori</h4>
                                <h1 class="display-4 fw-bold">{{ $jumlah_kategori }}</h1>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-box">
                                <h4 class="fw-bold">User</h4>
                                <h1 class="display-4 fw-bold">{{ $jumlah_user }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>