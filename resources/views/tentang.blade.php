@extends('layouts.app')

@section('content')
<div class="row justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="col-md-5">
        <div class="card glass-card p-4 shadow-lg border-0 text-center" style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px);">
            
            <h3 class="fw-bold mb-3 text-info text-uppercase" style="letter-spacing: 2px;">Profil</h3>

            <div class="mb-3">
                <img src="{{ asset('images/wan.jpg') }}" 
                     class="rounded-circle shadow-lg border border-2 border-info p-1" 
                     style="width: 130px; height: 130px; object-fit: cover;" 
                     alt="Foto Profil Harwan">
            </div>

            <div class="text-start rounded-4 px-3 py-2" style="background: rgba(0, 0, 0, 0.2);">
                <div class="py-2 border-bottom border-info border-opacity-25">
                    <small class="text-info d-block fw-bold text-uppercase" style="font-size: 0.6rem;">Nama</small>
                    <span class="fw-bold text-white">Harwan Manurung</span>
                </div>
                
                <div class="py-2 border-bottom border-info border-opacity-25">
                    <small class="text-info d-block fw-bold text-uppercase" style="font-size: 0.6rem;">NIM</small>
                    <span class="fw-bold text-white">2357401011</span>
                </div>
                
                <div class="py-2 border-bottom border-info border-opacity-25">
                    <small class="text-info d-block fw-bold text-uppercase" style="font-size: 0.6rem;">GitHub</small>
                    <a href="https://github.com/username-kamu" target="_blank" class="text-white text-decoration-none fw-bold">harwanmanurung/uas_laravel_mi23 </a>
                </div>

                <div class="py-2">
                    <small class="text-info d-block fw-bold text-uppercase" style="font-size: 0.6rem;">Kelas</small>
                    <span class="fw-bold text-white" style="font-size: 0.85rem;">Manajemen Informatika 23</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="/katalog" class="btn btn-info btn-sm rounded-pill px-4 fw-bold shadow">
                    Ke Katalog
                </a>
            </div>
            
        </div>
    </div>
</div>
@endsection