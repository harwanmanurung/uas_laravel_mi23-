<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Menambah data produk perabotan rumah tangga satu per satu
        Product::create([
            'nama_produk' => 'Sofa Velvet Minimalis',
            'deskripsi_produk' => 'Sofa premium dengan bahan kain velvet lembut dan rangka kayu solid, sangat elegan untuk ruang tamu modern.'
        ]);

        Product::create([
            'nama_produk' => 'Vas Keramik Estetik',
            'deskripsi_produk' => 'Vas dekoratif bahan keramik handmade dengan tekstur unik, cocok untuk hiasan meja atau sudut ruangan.'
        ]);

        Product::create([
            'nama_produk' => 'Jam Dinding Kayu Retro',
            'deskripsi_produk' => 'Jam dinding desain klasik dari kayu asli dengan mesin senyap (silent movement), pas untuk dekorasi rumah.'
        ]);

        Product::create([
            'nama_produk' => 'Lemari Pakaian 3 Pintu',
            'deskripsi_produk' => 'Lemari kapasitas besar dengan material MDF grade A, dilengkapi cermin panjang dan gantungan baju ekstra.'
        ]);
    }
}