@extends('layouts.admin_layout') {{-- Asumsi kita pakai layout admin nomor 6 --}}
@section('content')
<div class="border border-dark p-4">
    <h4 class="fw-bold mb-3">Kategori</h4>
    <a href="/admin/kategori/tambah" class="btn btn-outline-dark mb-3">Tambah Kategori</a>
    
    <div class="col-md-4">
        <ul class="list-group">
            @foreach($categories as $cat)
            <li class="list-group-item d-flex justify-content-between align-items-center border-dark mb-1">
                {{ $cat->nama_kategori }}
                <form action="{{ route('category.delete', $cat->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-link text-primary p-0">Hapus</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection