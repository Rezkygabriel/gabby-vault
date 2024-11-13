<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $about = [
            'title' => 'Tentang Ferrari Indonesia',
            'description' => 'Dealer resmi Ferrari di Indonesia',
            'vision' => 'Menjadi dealer mobil mewah terpercaya di Indonesia',
            'mission' => 'Memberikan layanan terbaik kepada pelanggan'
        ];

        return view('tentang', compact('about'));
    }
}