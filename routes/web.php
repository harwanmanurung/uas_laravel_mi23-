<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Fashion Hub
|--------------------------------------------------------------------------
*/

// Nomor 2: Halaman Katalog Produk
Route::get('/katalog', [ProductController::class, 'index']);

// Nomor 3: Halaman Tentang (Profil Pengembang)
Route::get('/tentang', function () {
    return view('tentang');
});

// Nomor 4: Halaman Daftar Pengguna
Route::get('/daftar', [UserController::class, 'showRegistrationForm'])->name('register'); 
Route::post('/daftar', [UserController::class, 'register'])->name('register.store');

// Nomor 5: Halaman Login
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');

// Fitur Admin (Wajib Login)
Route::middleware(['auth'])->group(function () {
    
    // Dashboard Admin
    Route::get('/admin', [AdminController::class, 'index']);

    // Manajemen Kategori (Nomor 6 & 7)
    Route::get('/admin/kategori', [CategoryController::class, 'index']);
    Route::get('/admin/kategori/tambah', [CategoryController::class, 'create']);
    Route::post('/admin/kategori', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/admin/kategori/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    
    // Fitur Logout
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});