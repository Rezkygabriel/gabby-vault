<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        
        // Nanti bisa ditambahkan logika pencarian
        $results = [];
        
        if ($query) {
            // Contoh data pencarian sederhana
            $results = [
                [
                    'title' => 'SF90 Stradale',
                    'type' => 'model',
                    'url' => route('model')
                ],
                [
                    'title' => 'Tentang Kami',
                    'type' => 'page',
                    'url' => route('tentang')
                ]
            ];
        }

        return view('search', compact('query', 'results'));
    }
}