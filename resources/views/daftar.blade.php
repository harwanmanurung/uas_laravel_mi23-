@extends('layouts.app')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-5">
        <div class="card glass-card p-4 shadow-lg border-0" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px);">
            
            <div class="text-center mb-4">
                <h2 class="fw-bold text-info text-uppercase" style="letter-spacing: 2px;">Daftar Akun</h2>
                <p class="text-white opacity-75 small">Silakan lengkapi data diri Anda</p>
            </div>

            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label text-info fw-bold small text-uppercase">Nama</label>
                    <input type="text" name="nama" class="form-control bg-transparent text-white border-info border-opacity-50" 
                           placeholder="Nama Lengkap" required style="border-radius: 10px;">
                </div>

                <div class="mb-3">
                    <label class="form-label text-info fw-bold small text-uppercase">Email</label>
                    <input type="email" name="email" class="form-control bg-transparent text-white border-info border-opacity-50" 
                           placeholder="email@example.com" required style="border-radius: 10px;">
                </div>

                <div class="mb-4">
                    <label class="form-label text-info fw-bold small text-uppercase">Password</label>
                    <input type="password" name="password" class="form-control bg-transparent text-white border-info border-opacity-50" 
                           placeholder="Min. 8 karakter" required style="border-radius: 10px;">
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <a href="/katalog" class="text-info small text-decoration-none fw-bold"> Kembali</a>
                    <button type="submit" class="btn btn-info rounded-pill px-4 fw-bold shadow">
                        Daftar Sekarang
                    </button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection