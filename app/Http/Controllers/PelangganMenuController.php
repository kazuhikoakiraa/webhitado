<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PelangganMenuController extends Controller
{
    public function index()
    {
        $makanan = Product::where('kategori', 'makanan')->get();
        $minuman = Product::where('kategori', 'minuman')->get();

        return view('Pelanggan.menu', compact('makanan', 'minuman'));
    }
}