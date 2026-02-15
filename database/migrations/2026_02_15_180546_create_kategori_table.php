<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'kategori' sesuai spesifikasi soal 7.1
        Schema::create('kategori', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nama_kategori', 50); // Nama Kategori varchar(50)
            $table->timestamps(); // created_at & updated_at
            $table->softDeletes(); // Menambahkan kolom 'deleted_at' sesuai permintaan soal
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori');
    }
};