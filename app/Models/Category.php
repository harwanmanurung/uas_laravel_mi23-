<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Soal 7.1: Mendukung deleted_at

class Category extends Model
{
    use HasFactory, SoftDeletes; // Mengaktifkan fitur Soft Deletes

    // Soal 7.1: Nama tabel disesuaikan dengan spesifikasi database
    protected $table = 'kategori';

    // Soal 7.1 & 7.4: Mendaftarkan kolom agar bisa diisi data (Mass Assignment)
    protected $fillable = [
        'nama_kategori', // Harus sama dengan nama kolom di database kamu
    ];

    // Mengatur kolom waktu jika diperlukan (optional tapi baik untuk standar Laravel)
    protected $dates = ['deleted_at'];
}