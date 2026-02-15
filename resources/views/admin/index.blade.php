@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card glass-card p-3 shadow-lg border-0 mb-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px);">
            <div class="list-group list-group-flush bg-transparent">
                <a href="/admin" class="list-group-item list-group-item-action bg-info bg-opacity-25 text-info fw-bold border-info border-opacity-25 rounded mb-2 shadow-sm">Beranda</a>
                <a href="/katalog" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3">Produk</a>
                <a href="/admin/kategori" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3">Kategori</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3">User</a>
                <form action="{{ route('logout') }}" method="POST" class="mt-2">
                    @csrf
                    <button type="submit" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold border-0">Keluar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card glass-card p-4 shadow-lg border-0" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); min-height: 500px;">
            <div class="mb-4">
                <h2 class="fw-bold text-white mb-1">Selamat Datang,</h2>
                <h3 class="text-info fw-light">{{ Auth::user()->name }}</h3> </div>
            
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-info border-opacity-50" style="background: rgba(0,0,0,0.3);">
                        <small class="text-info fw-bold text-uppercase">Total Produk</small>
                        <h1 class="display-4 fw-bold text-white mt-2 mb-0">{{ $jumlahProduk }}</h1>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 rounded-4 border border-info border-opacity-50" style="background: rgba(0,0,0,0.3);">
                        <small class="text-info fw-bold text-uppercase">Kategori</small>
                        <h1 class="display-4 fw-bold text-white mt-2 mb-0">{{ $jumlahKategori }}</h1>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-4 text-center rounded-4 shadow-sm border border-info border-opacity-50" style="background: rgba(0,0,0,0.3);">
                        <small class="text-info fw-bold text-uppercase">User Terdaftar</small>
                        <h1 class="display-4 fw-bold text-white mt-2 mb-0">{{ $jumlahUser }}</h1>
                    </div>
                </div>
            </div>

            <div class="mt-auto pt-5 border-top border-info border-opacity-10 text-center text-white opacity-25 small">
                Fashion Hub Management System &copy; 2026
            </div>
        </div>
    </div>
</div>
@endsection