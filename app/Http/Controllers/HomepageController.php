<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tentang1 = Homepage::where('section','profile')->get();
        $tentang2 = Homepage::where('section','about')->get();
        $tentang3 = Homepage::where('section','explore')->get();
        return view('Admin.admin-tentang', compact('tentang1','tentang2','tentang3'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);

        $homepage = Homepage::create([
            'description' => $request->description,
        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $homepage->img . '_' . time() . '.' . $img->getClientOriginalExtension();
            $homepage->img = $file_name;
            $homepage->update();
            $img->move('../public/assets/img/', $file_name);
        }
        
        return back()->with('alert', 'Berhasil Tambah Data!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $homepage = Homepage::findOrFail($id);

        $request->validate([

        ]);

        $homepage->update([
            'description' => $request->description,
        ]);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $file_name = $homepage->img . '_' . time() . '.' . $img->getClientOriginalExtension();
            $homepage->img = $file_name;
            $homepage->update();
            $img->move('../public/assets/img/', $file_name);
        }
        return back()->with('alert', 'Berhasil Edit Data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
