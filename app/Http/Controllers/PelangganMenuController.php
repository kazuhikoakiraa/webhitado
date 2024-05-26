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

    public function search(Request $request)
    {
        $query = $request->input('query');
        $minuman = Product::where('kategori', 'minuman')->where('nama', 'LIKE', "%{$query}%")->get();
        $makanan = Product::where('kategori', 'makanan')->where('nama', 'LIKE', "%{$query}%")->get();

        return view('Pelanggan.menu', compact('minuman', 'makanan'));
    }
}