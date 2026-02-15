@extends('layouts.app')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-5">
        <div class="card glass-card p-4 shadow-lg border-0" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px);">
            
            @if(session('error'))
                <div class="alert alert-danger border-0 bg-danger bg-opacity-25 text-white small mb-4 text-center" role="alert" style="border-radius: 10px;">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i> {{ session('error') }}
                </div>
            @endif

            <div class="text-center mb-4">
                <h2 class="fw-bold text-info text-uppercase" style="letter-spacing: 2px;">Selamat Datang</h2>
                <p class="text-white opacity-75 small">Masuk ke akun Fashion Hub Anda</p>
            </div>

            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label class="form-label text-info fw-bold small text-uppercase">Email</label>
                    <input type="email" name="email" class="form-control bg-transparent text-white border-info border-opacity-50" 
                           placeholder="Masukkan Email" required style="border-radius: 10px;">
                </div>

                <div class="mb-4">
                    <label class="form-label text-info fw-bold small text-uppercase">Password</label>
                    <input type="password" name="password" class="form-control bg-transparent text-white border-info border-opacity-50" 
                           placeholder="Masukkan Password" required style="border-radius: 10px;">
                </div>

                <div class="d-grid gap-2 mt-4">
                    <button type="submit" class="btn btn-info rounded-pill py-2 fw-bold shadow">
                        MASUK SEKARANG
                    </button>
                </div>

                <div class="text-center mt-3">
                    <p class="small text-white opacity-50">Belum punya akun? 
                        <a href="{{ route('register') }}" class="text-info text-decoration-none fw-bold">Daftar di sini</a>
                    </p>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection