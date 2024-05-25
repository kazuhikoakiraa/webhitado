<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Incoming;

class IncomingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bar = Incoming::where('kategori', 'Minuman')->get();
        $dapur = Incoming::where('kategori', 'Makanan')->get();

        return view('Admin.admin-inventorimasuk', compact('dapur','bar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'item_id' => 'required|numeric',
            'kategori' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'satuan' => 'required|string|max:255',

        ]);

        $data = Incoming::create([
            'item_id' => $request->item_id,
            'kategori' => $request->kategori,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'satuan' => $request->satuan,
        ]);

        // dd($data);

        return back()->with('alert', 'Berhasil Tambah Data!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Incoming::findOrFail($id);

        $request->validate([
            'kategori' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'satuan' => 'required|string|max:255',
            
        ]);

        $data->update([
            'kategori' => $request->kategori,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'satuan' => $request->satuan,
        ]);

        // dd($data);

        return back()->with('alert', 'Berhasil Edit Data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Incoming::findOrFail($id)->delete();

        return back()->with('alert', 'Berhasil Hapus Data!');
    }
}