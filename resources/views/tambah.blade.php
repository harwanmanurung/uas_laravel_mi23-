@extends('layouts.admin_layout')
@section('content')
<div class="border border-dark p-4">
    <h4 class="fw-bold mb-4">Tambah Kategori</h4>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="row align-items-center">
            <div class="col-auto">
                <label>Nama Kategori</label>
            </div>
            <div class="col-md-4">
                <input type="text" name="nama_kategori" class="form-control border-dark" required>
            </div>
        </div>
        <div class="mt-4">
            <a href="/admin/kategori" class="text-primary me-3">Kembali</a>
            <button type="submit" class="btn btn-outline-dark">Simpan Kategori</button>
        </div>
    </form>
</div>
@endsection