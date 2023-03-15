<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Guru;
use App\Models\KategoriBerita;
use App\Models\ProfilSekolah;
use App\Models\Saran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $berita = Berita::with('kategori')->get();
        $guru = Guru::with('user')->get();
        $kategori = KategoriBerita::all();
        return view('home.index', compact('berita', 'guru', 'kategori'));
    }

    public function about()
    {
        $profil = ProfilSekolah::all()->first();
        return view('home.about', compact('profil'));
    }

    public function contact()
    {

        return view('home.contact_us');
    }

    public function contact_send(Request $request)
    {
        try {
            Saran::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'subject' => $request->subject,
                'pesan' => $request->pesan,
            ]);

            return redirect()->back()->with('success', 'Pesan telah terkirim');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Pesan gagal terkirim');
        }
    }

    public function berita($slug)
    {
        $berita = Berita::with('kategori')->where('slug', $slug)->first();
        $kategori = KategoriBerita::all();
        return view('home.berita', compact('berita', 'kategori'));
    }

    public function kategori($id)
    {
        $berita = Berita::with('kategori')->get();

        return view('home.kategori', compact('berita'));
    }

    public function cari_berita(Request $request)
    {
        $berita = Berita::where('judul',$request->nama)->orWhere('isi','like',"%{$request->nama}%")->get();
        return view('home.cari_berita', compact('berita'));
    }
}
