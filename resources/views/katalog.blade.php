@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold display-3" style="letter-spacing: 5px;">HOME CENTER</h1>
    <p class="lead opacity-75">Lengkapi Kenyamanan Rumah dengan Perabotan Berkualitas</p>
</div>

<div class="row justify-content-center">
    @forelse($barang as $item)
    <div class="col-md-3 mb-4"> 
        <div class="card glass-card p-3 border-0 shadow-lg" style="transition: 0.3s transform;">
            
            <div class="overflow-hidden rounded-4 mb-3" style="height: 200px; border: 1px solid rgba(255,255,255,0.1);">
                <img src="{{ asset('images/' . $item->id + 4 . '.jpg') }}" 
                     class="w-100 h-100" 
                     style="object-fit: cover;" 
                     alt="{{ $item->nama_produk }}">
            </div>
            
            <div class="card-body text-white pt-0">
                <h4 class="fw-bold text-warning mb-1">{{ $item->nama_produk }}</h4> 
                <p class="small opacity-75 mb-3" style="height: 40px; overflow: hidden;">{{ $item->deskripsi_produk }}</p> 
                
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <span class="badge bg-warning text-dark px-3 py-1 rounded-pill" style="font-size: 0.7rem;">Furniture</span>
                    <button class="btn btn-outline-warning btn-sm rounded-pill px-3 fw-bold">Cek Stok</button>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center py-5">
        <div class="glass-card d-inline-block px-5 py-4">
            <h3 class="opacity-50 text-white">Data perabotan belum tersedia di database.</h3>
            <p class="small">Silakan tambahkan data melalui panel admin.</p>
        </div>
    </div>
    @endforelse
</div>
@endsection