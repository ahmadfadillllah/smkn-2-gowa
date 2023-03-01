<?php

namespace App\Http\Controllers;

use App\Models\NomorSurat;
use App\Models\Siswa;
use App\Models\SuketSiswaAktif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuketSiswaAktifController extends Controller
{
    //
    public function index()
    {
        if(Auth::user()->role == 'admin'){

            $suket = SuketSiswaAktif::with('user', 'nomorsurat', 'siswa')->get();
        }else{
            $suket = SuketSiswaAktif::with('user', 'nomorsurat', 'siswa')->where('user_id', Auth::user()->id)->get();
        }

        $nomor_surat = NomorSurat::where('jumlah', 0)->get();
        $siswa = Siswa::all();

        return view('suket_siswa_aktif.index', compact('suket', 'nomor_surat', 'siswa'));
    }

    public function insert(Request $request)
    {
        try {
            SuketSiswaAktif::create([
                'nomorsurat_id' => $request->nomorsurat_id,
                'user_id' => Auth::user()->id,
                'siswa_id' => $request->siswa_id,
                'tahun_lulus' => $request->tahun_lulus,
                'tanggal' => $request->tanggal,
            ]);

            NomorSurat::where('id', $request->nomorsurat_id)->update([
                'jumlah' => 1,
            ]);

            return redirect()->back()->with('success', 'Surat telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {


        try {
            $suket = SuketSiswaAktif::where('id', $id)->first();
            NomorSurat::where('id', $suket->nomorsurat_id)->update([
                'jumlah' => 0,
            ]);

            SuketSiswaAktif::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Surat telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
