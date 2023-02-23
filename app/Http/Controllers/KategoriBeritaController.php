<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    //
    public function index()
    {
        $kategori = KategoriBerita::all();
        return view('kategoriberita.index', compact('kategori'));
    }

    public function insert(Request $request)
    {
        try {
            KategoriBerita::create([
                'nama' => $request->nama,
            ]);
            return redirect()->back()->with('success', 'Kategori telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update(Request $request,$id)
    {
        try {
            KategoriBerita::where('id', $id)->update(['nama' => $request->nama]);

            return redirect()->back()->with('success', 'Kategori telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }

    }

    public function destroy($id)
    {
        try {
            KategoriBerita::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Kategori telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
