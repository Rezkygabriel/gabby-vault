<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:5',
            'message' => 'required|min:10'
        ]);

        // Nanti bisa ditambahkan logika penyimpanan ke database
        // atau pengiriman email

        return redirect()
            ->route('kontak')
            ->with('success', 'Pesan Anda telah berhasil dikirim!');
    }
}