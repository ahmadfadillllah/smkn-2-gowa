<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    //
    public function index()
    {
        $kategori = KategoriBerita::all();
        $berita = Berita::all();
        return view('berita.index', compact('kategori', 'berita'));
    }

    public function insert()
    {
        $kategori = KategoriBerita::all();
        return view('berita.insert', compact('kategori'));
    }

    public function insert_post(Request $request)
    {
        $date = date('YmdHisgis');

        try {
            $berita = new Berita;
            $berita->kategoriberita_id = $request->kategoriberita_id;
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->slug = Str::of($request->judul)->slug('-');
            if($request->hasFile('gambar')){
                $request->file('gambar')->move('admin/finlab.dexignzone.com/xhtml/images/berita/', $date.$request->file('gambar')->getClientOriginalName());
                $berita->gambar = $date.$request->file('gambar')->getClientOriginalName();
                $berita->save();
            }

            return redirect()->route('berita.index')->with('success', 'Berita/kegiatan telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('berita.index')->with('info', $th->getMessage());
        }
    }

    public function edit($id)
    {
        $berita = Berita::with('kategori')->find($id);
        $kategori = KategoriBerita::all();

        return view('berita.edit', compact('berita', 'kategori'));
    }

    public function update($id, Request $request)
    {
        $date = date('YmdHisgis');
        try {
            $berita = Berita::find($id);
            $berita->kategoriberita_id = $request->kategoriberita_id;
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->slug = Str::of($request->judul)->slug('-');
            if($request->hasFile('gambar')){
                $request->file('gambar')->move('admin/finlab.dexignzone.com/xhtml/images/berita/', $date.$request->file('gambar')->getClientOriginalName());
                $berita->gambar = $date.$request->file('gambar')->getClientOriginalName();
            }
            $berita->save();

            return redirect()->route('berita.index')->with('success', 'Berita/kegiatan telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->route('berita.index')->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Berita::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Berita/kegiatan telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
