<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Menambah data produk baju satu per satu
        Product::create([
            'nama_produk' => 'Kaos Oversize Hitam',
            'deskripsi_produk' => 'Bahan cotton combed 24s premium, nyaman dan adem dipakai seharian.'
        ]);

        Product::create([
            'nama_produk' => 'Kemeja Flanel Kotak',
            'deskripsi_produk' => 'Kemeja flanel motif kotak-kotak dengan bahan lembut, cocok untuk gaya kasual.'
        ]);

        Product::create([
            'nama_produk' => 'Jaket Hoodie Polos',
            'deskripsi_produk' => 'Hoodie bahan fleece tebal dengan pilihan warna estetik dan jahitan rapi.'
        ]);

        Product::create([
            'nama_produk' => 'Celana Chino Slim Fit',
            'deskripsi_produk' => 'Celana chino bahan stretch yang nyaman digunakan untuk acara formal maupun santai.'
        ]);
    }
}