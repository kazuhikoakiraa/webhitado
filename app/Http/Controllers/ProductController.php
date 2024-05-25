<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Product as ModelsProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::where('kategori','makanan')->get();
        $product2 = Product::where('kategori','minuman')->get();
        return view("Admin.admin-kelolamenu", compact('product', 'product2'));

    }

    /**
     * Show the form for creating a new resource.
     */

        public function store(Request $request)
        {
            $validatedata = $request->validate([
                'kategori' => 'required|string|max:255',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',  // Image validation
                'id_product' => 'required|numeric',
                'nama' => 'required|string|max:255',
                'harga' => 'required|numeric|min:0',
            ]);

           Product::create($validatedata);
            return back()->with('alert','Berhasil Menambahkan Data!');

        }


        // Menangani update data menu
        public function update(Request $request, $id)
        {

        }

        // Menghapus menu berdasarkan ID
        public function destroy($id)
        {
            Product::findOrFail($id)->delete();

            return back()->with('alert', 'Berhasil Hapus Data Incoming!');
        }
    }