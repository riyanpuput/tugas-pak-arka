<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Tampilkan form admin
    public function create()
    {
        return view('admin.admin');
    }

    // Proses penyimpanan form admin
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'role' => 'required|in:Super Admin,Kasir',
        ]);

        // Kalau validasi berhasil, bisa simpan ke database (sementara kita return dulu)
        return back()->with('success', 'Data admin berhasil dikirim!');
    }
}