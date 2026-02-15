<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller{
public function index() {
    $barang = Product::all(); // Mengambil semua data dari tabel produk
    return view('katalog', compact('barang')); // Mengirim data ke file view bernama katalog
}
}
