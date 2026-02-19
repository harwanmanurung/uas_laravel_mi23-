@extends('layouts.app')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-5">
        <div class="card glass-card p-4 shadow-lg border-0">
            
            <div class="text-center mb-4">
                <h2 class="fw-bold text-warning text-uppercase" style="letter-spacing: 2px;">Daftar Akun</h2>
                <p class="text-white opacity-75 small">Bergabunglah dengan Home Center</p>
            </div>

            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label text-warning fw-bold small text-uppercase">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control bg-transparent text-white border-warning border-opacity-50" 
                           placeholder="Masukkan Nama Anda" required style="border-radius: 10px;">
                </div>

                <div class="mb-3">
                    <label class="form-label text-warning fw-bold small text-uppercase">Email</label>
                    <input type="email" name="email" class="form-control bg-transparent text-white border-warning border-opacity-50" 
                           placeholder="email@example.com" required style="border-radius: 10px;">
                </div>

                <div class="mb-4">
                    <label class="form-label text-warning fw-bold small text-uppercase">Password</label>
                    <input type="password" name="password" class="form-control bg-transparent text-white border-warning border-opacity-50" 
                           placeholder="Min. 8 karakter" required style="border-radius: 10px;">
                </div>

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <a href="/katalog" class="text-warning small text-decoration-none fw-bold"> Kembali ke Katalog</a>
                    <button type="submit" class="btn btn-warning rounded-pill px-4 fw-bold shadow">
                        Daftar Sekarang
                    </button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection