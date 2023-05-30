<?php

namespace App\Http\Controllers;

use App\Models\NomorSurat;
use App\Models\Siswa;
use App\Models\SuratKeteranganLulus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratKeteranganLulusController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin' and Auth::user()->role == 'guru'){

            $lulus = SuratKeteranganLulus::with('user', 'nomorsurat', 'siswa')->get();
        }else{
            $lulus = SuratKeteranganLulus::with('user', 'nomorsurat', 'siswa')->where('user_id', Auth::user()->id)->get();
        }

        $nomor_surat = NomorSurat::where('jumlah', 0)->get();
        $siswa = Siswa::all();

        return view('surat_keterangan_lulus.index', compact('lulus', 'nomor_surat', 'siswa'));
    }

    public function insert(Request $request)
    {
        try {
            SuratKeteranganLulus::create([
                'nomorsurat_id' => $request->nomorsurat_id,
                'user_id' => Auth::user()->id,
                'siswa_id' => $request->siswa_id,
                'tahun_pelajaran' => $request->tahun_pelajaran,
                'tahun_us' => $request->tahun_us,
                'dari_tanggal' => $request->dari_tanggal,
                'sampai_tanggal' => $request->sampai_tanggal,
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
            $baik = SuratKeteranganLulus::where('id', $id)->first();
            NomorSurat::where('id', $baik->nomorsurat_id)->update([
                'jumlah' => 0,
            ]);

            SuratKeteranganLulus::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Surat telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
