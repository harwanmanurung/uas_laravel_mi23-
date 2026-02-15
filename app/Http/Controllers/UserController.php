<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Menampilkan halaman daftar (No. 4)
    public function showRegistrationForm() {
        return view('daftar');
    }

    // Proses Simpan Data User
    public function register(Request $request) {
        // Simpan data ke database sesuai input 'nama' di Blade
        User::create([
            'name' => $request->nama, 
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Setelah daftar, langsung arahkan ke login agar user bisa masuk
        return redirect()->route('login')->with('success', 'Pendaftaran Berhasil! Silakan Login.');
    }

    // Menampilkan halaman login (No. 5)
    public function showLoginForm() {
        return view('login');
    }

    // Proses Login
    public function login(Request $request) {
        // Ambil data input email dan password
        $credentials = $request->only('email', 'password');

        // Cek kecocokan di database
        if (Auth::attempt($credentials)) {
            // Jika berhasil, arahkan ke halaman Tentang (No. 3) sesuai soal
            return redirect('/tentang');
        }

        // Jika gagal, kembali ke halaman sebelumnya dengan pesan error
        return back()->with('error', 'Username / Password tidak sesuai');
    }

    // TAMBAHAN: Proses Logout agar akun bisa keluar
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}