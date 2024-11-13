<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        // Nanti bisa ditambahkan data model mobil
        $models = [
            [
                'name' => 'SF90 Stradale',
                'description' => 'Mobil hybrid listrik produksi pertama dari Ferrari',
                'image' => 'sf90.jpg'
            ],
            [
                'name' => 'Ferrari Purosangue',
                'description' => 'SUV pertama dari Ferrari',
                'image' => 'purosangue.jpg'
            ]
        ];

        return view('model', compact('models'));
    }
}