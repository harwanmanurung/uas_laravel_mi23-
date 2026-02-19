@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card glass-card p-3 shadow-lg border-0 mb-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px);">
            <div class="list-group list-group-flush bg-transparent">
                <a href="/admin" class="list-group-item list-group-item-action bg-warning bg-opacity-25 text-warning fw-bold border-warning border-opacity-25 rounded mb-2 shadow-sm">
                    <i class="bi bi-speedometer2 me-2"></i> Beranda
                </a>
                <a href="/katalog" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3">
                    <i class="bi bi-box-seam me-2"></i> Produk
                </a>
                <a href="/admin/kategori" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3">
                    <i class="bi bi-tags me-2"></i> Kategori
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3">
                    <i class="bi bi-people me-2"></i> User
                </a>
                <form action="{{ route('logout') }}" method="POST" class="mt-2">
                    @csrf
                    <button type="submit" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold border-0">
                        <i class="bi bi-box-arrow-right me-2"></i> Keluar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card glass-card p-4 shadow-lg border-0" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); min-height: 80vh;">
            
            <div class="mb-5">
                <h2 class="fw-bold text-white mb-1">Selamat Datang,</h2>
                <h3 class="text-warning fw-light">{{ Auth::user()->name }}</h3>
                <p class="text-white opacity-50 small">Panel Manajemen Home Center</p>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-warning border-opacity-50" style="background: rgba(0,0,0,0.3);">
                        <small class="text-warning fw-bold text-uppercase" style="letter-spacing: 1px;">Total Produk</small>
                        <h1 class="display-4 fw-bold text-white mt-2 mb-0">{{ $jumlah_produk }}</h1>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-warning border-opacity-50" style="background: rgba(0,0,0,0.3);">
                        <small class="text-warning fw-bold text-uppercase" style="letter-spacing: 1px;">Kategori</small>
                        <h1 class="display-4 fw-bold text-white mt-2 mb-0">{{ $jumlah_kategori }}</h1>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-warning border-opacity-50" style="background: rgba(0,0,0,0.3);">
                        <small class="text-warning fw-bold text-uppercase" style="letter-spacing: 1px;">User</small>
                        <h1 class="display-4 fw-bold text-white mt-2 mb-0">{{ $jumlah_user }}</h1>
                    </div>
                </div>
            </div>

            <div class="mt-auto pt-5 text-center text-white opacity-25 small">
                Home Center Management System &copy; 2026
            </div>
        </div>
    </div>
</div>
@endsection