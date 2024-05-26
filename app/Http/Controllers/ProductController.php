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
            ]);

            $product = Product::create([
                'kategori' => $request->kategori,
                'id_product' => $request->id_product,
                'nama' => $request->nama,
                'harga' => $request->harga,

            ]);

            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $file_name = $product->img . '_' . time() . '.' . $img->getClientOriginalExtension();
                $product->img = $file_name;
                $product->update();
                $img->move('../public/assets/img/', $file_name);
            }

            return back()->with('alert','Berhasil Menambahkan Data!');

        }


        // Menangani update data menu
        public function update(Request $request, $id)
        {

            $product = Product::findOrFail($id);

            $validatedata = $request->validate([

            ]);

            $product ->update([
                'kategori' => $request->kategori,
                'id_product' => $request->id_product,
                'nama' => $request->nama,
                'harga' => $request->harga,

            ]);

            if ($request->hasFile('img')) {
                $img = $request->file('img');
                $file_name = $product->img . '_' . time() . '.' . $img->getClientOriginalExtension();
                $product->img = $file_name;
                $product->update();
                $img->move('../public/assets/img/', $file_name);
            }

            return back()->with('alert','Berhasil Mengedit Data!');
        }

        // Menghapus menu berdasarkan ID
        public function destroy($id)
        {
            Product::findOrFail($id)->delete();

            return back()->with('alert', 'Berhasil Hapus Data Incoming!');
        }
    }