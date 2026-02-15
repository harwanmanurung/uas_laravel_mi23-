<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product; // WAJIB TAMBAHKAN INI AGAR MODEL PRODUCT DIKENAL
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Data User (Bawaan Laravel)
        User::factory()->create([
            'name' => 'Admin Toko',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password123'), // Password untuk login nanti
        ]);

        // TAMBAHKAN KODE PRODUK DI SINI (NOMOR 2)
        Product::create([
            'nama_produk' => 'Kaos Oversize Hitam',
            'deskripsi_produk' => 'Bahan premium cotton combed 24s, potongan oversize kekinian.'
        ]);

        Product::create([
            'nama_produk' => 'Kemeja Flanel Kotak',
            'deskripsi_produk' => 'Kemeja bahan flanel lembut, cocok untuk gaya kasual atau formal.'
        ]);

        Product::create([
            'nama_produk' => 'Hoodie Pulos Putih',
            'deskripsi_produk' => 'Hoodie bahan fleece tebal dengan saku depan dan penutup kepala.'
        ]);

        Product::create([
            'nama_produk' => 'Celana Chino Slim',
            'deskripsi_produk' => 'Celana bahan katun stretch yang elastis dan nyaman untuk bergerak.'
        ]);
    }
}