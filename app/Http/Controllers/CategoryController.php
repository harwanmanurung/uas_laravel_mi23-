<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // 1. Menampilkan daftar kategori (Soal 7.3)
    public function index() {
        // Mengambil semua data kategori dari database
        $categories = Category::all();
        // Memanggil file di resources/views/admin/kategori/index.blade.php
        return view('admin.kategori.index', compact('categories'));
    }

    // 2. Menampilkan form tambah (Soal 7.4)
    public function create() {
        return view('admin.kategori.tambah');
    }

    // 3. Menyimpan kategori baru (Soal 7.4)
    public function store(Request $request) {
        // Validasi input agar sesuai spesifikasi database
        $request->validate([
            'nama_kategori' => 'required|string|max:50', // Sesuai input di form kamu
        ]);

        // Simpan ke database menggunakan nama kolom 'nama_kategori'
        Category::create([
            'nama_kategori' => $request->nama_kategori // Menangkap data dari input 'nama_kategori'
        ]);

        // Redirect kembali ke halaman index kategori
        return redirect('/admin/kategori')->with('success', 'Kategori berhasil ditambahkan!');
    }

    // 4. Menghapus kategori (Soal 7.5)
    public function destroy($id) {
        // Menghapus data berdasarkan ID (Mendukung Soft Deletes)
        Category::destroy($id);
        
        return back()->with('success', 'Kategori berhasil dihapus!');
    }
}