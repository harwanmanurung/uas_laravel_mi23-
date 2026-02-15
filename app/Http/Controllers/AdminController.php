<?php

namespace App\Http\Controllers;

// Import Model agar pemanggilan di bawah lebih ringkas
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {
    
    public function index() {
        // 3.3: Menghitung jumlah akumulasi produk dari database
        $jumlahProduk = Product::count();
        
        // 3.4: Menghitung jumlah akumulasi kategori (Tabel Kategori sudah kita perbaiki)
        $jumlahKategori = Category::count();
        
        // 3.5: Menghitung jumlah akumulasi user terdaftar
        $jumlahUser = User::count();
    
        // Mengirim data ke view admin/index.blade.php
        return view('admin.index', compact('jumlahProduk', 'jumlahKategori', 'jumlahUser'));
    }
}