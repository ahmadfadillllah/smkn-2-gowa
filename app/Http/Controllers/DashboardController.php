<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kelas;
use App\Models\Reviews;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $reviews = Reviews::with('user')->get();
        $berita = Berita::all();
        return view('dashboard.index', compact('reviews', 'berita'));
    }

    public function search(Request $request)
    {
        $search = Siswa::where('nama_siswa','like',"%".$request->cari_siswa."%")->get();
        $kelas = Kelas::all();
        return view('cari_siswa.index', compact('search', 'kelas'));
    }
}
