@extends('layouts.app')

@section('content')
<div class="row g-4">
    <div class="col-md-3">
        <div class="card border-0 shadow-lg" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); border-radius: 20px;">
            <div class="card-body p-3">
                <div class="list-group list-group-flush bg-transparent">
                    <a href="/admin" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3 opacity-75">
                        <i class="bi bi-speedometer2 me-2"></i> Beranda
                    </a>
                    <a href="/katalog" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3 opacity-75">
                        <i class="bi bi-box-seam me-2"></i> Produk
                    </a>
                    <a href="/admin/kategori" class="list-group-item list-group-item-action bg-warning bg-opacity-25 text-warning fw-bold border-0 rounded-3 my-2 shadow-sm">
                        <i class="bi bi-tags-fill me-2"></i> Kategori
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent text-white border-bottom border-white border-opacity-10 py-3 opacity-75">
                        <i class="bi bi-people me-2"></i> User
                    </a>
                    <form action="{{ route('logout') }}" method="POST" class="mt-2">
                        @csrf
                        <button type="submit" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold border-0 py-3">
                            <i class="bi bi-box-arrow-right me-2"></i> Keluar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card border-0 shadow-lg" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(15px); border-radius: 20px; min-height: 550px;">
            <div class="card-body p-5">
                
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div>
                        <h2 class="fw-bold text-white mb-0" style="letter-spacing: 1px;">Manajemen Kategori</h2>
                        <p class="text-warning small mb-0 opacity-75">Kelola semua kategori produk toko perabotan Anda</p>
                    </div>
                    <a href="/admin/kategori/tambah" class="btn btn-warning px-4 py-2 fw-bold rounded-pill shadow-sm text-uppercase" style="font-size: 0.8rem;">
                        <i class="bi bi-plus-lg me-1"></i> Tambah Kategori
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle text-white">
                        <thead class="text-warning small text-uppercase" style="letter-spacing: 1.5px; border-bottom: 2px solid rgba(255, 193, 7, 0.2);">
                            <tr>
                                <th class="pb-3 ps-4" width="70%">Nama Kategori</th>
                                <th class="pb-3 text-center" width="30%">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="border-0">
                            @forelse($categories as $cat)
                            <tr style="transition: all 0.3s; border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <td class="py-4 ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-warning bg-opacity-10 p-2 me-3">
                                            <i class="bi bi-bookmark-fill text-warning"></i>
                                        </div>
                                        <span class="fw-bold" style="font-size: 1.1rem;">{{ $cat->nama_kategori }}</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <form action="{{ route('category.delete', $cat->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-4 hover-shadow">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center py-5">
                                    <div class="opacity-25 py-4">
                                        <i class="bi bi-folder2-open display-1"></i>
                                        <p class="mt-3 fs-5">Belum ada kategori yang tersedia</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .table-hover tbody tr:hover {
        background: rgba(255, 255, 255, 0.03);
        transform: scale(1.005);
    }
    .hover-shadow:hover {
        box-shadow: 0 0 15px rgba(220, 53, 69, 0.4);
        background-color: #dc3545 !important;
        color: white !important;
    }
</style>
@endsection