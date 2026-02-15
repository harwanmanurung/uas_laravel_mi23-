@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold display-3">FASHION HUB</h1>
    <p class="lead">Koleksi Pakaian Terbaik untuk Gaya Anda</p>
</div>

<div class="row justify-content-center">
    @forelse($barang as $item)
    <div class="col-md-3 mb-2"> <div class="card glass-card p-3 border-0 shadow-lg">
            
            <div class="overflow-hidden rounded-4 mb-3" style="height: 200px;">
                <img src="{{ asset('images/' . $item->id . '.jpg') }}" 
                     class="w-100 h-100" 
                     style="object-fit: cover;" 
                     alt="{{ $item->nama_produk }}">
            </div>
            
            <div class="card-body text-white pt-0">
                <h4 class="fw-bold text-info mb-1">{{ $item->nama_produk }}</h4> 
                <p class="small opacity-75 mb-3">{{ $item->deskripsi_produk }}</p> 
                
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <span class="badge bg-light text-dark px-2 py-1 rounded-pill" style="font-size: 0.7rem;">Premium</span>
                    <button class="btn btn-info btn-sm rounded-pill px-3 fw-bold">Detail</button>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 text-center py-5">
        <h3 class="opacity-50 text-white">Stok baju belum tersedia di database.</h3>
    </div>
    @endforelse
</div>
@endsection