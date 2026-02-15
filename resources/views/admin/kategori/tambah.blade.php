@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card glass-card p-3 shadow-lg border-0 mb-4" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px);">
            <div class="list-group list-group-flush bg-transparent">
                <a href="/admin" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3">Beranda</a>
                <a href="/katalog" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3">Produk</a>
                <a href="/admin/kategori" class="list-group-item list-group-item-action bg-info bg-opacity-25 text-info fw-bold border-info border-opacity-25 rounded mb-2 shadow-sm">Kategori</a>
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
            <h3 class="fw-bold text-white text-uppercase mb-4">Tambah Kategori</h3>
            <hr class="border-info border-opacity-50 mb-5">

            <div class="p-4 border border-white border-opacity-25 rounded-3" style="max-width: 600px; background: rgba(0,0,0,0.2);">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="row align-items-center mb-4">
                        <div class="col-md-4">
                            <label class="form-label text-white fw-bold mb-0">Nama Kategori</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="nama_kategori" class="form-control bg-transparent text-white border-white border-opacity-50" required autofocus>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 align-items-center mt-5">
                        <a href="/admin/kategori" class="text-info text-decoration-none fw-bold">Kembali</a>
                        <button type="submit" class="btn btn-outline-info fw-bold px-4 border-2">Simpan Kategori</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection