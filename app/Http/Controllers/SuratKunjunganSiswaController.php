<?php

namespace App\Http\Controllers;

use App\Models\NomorSurat;
use App\Models\Siswa;
use App\Models\SuratKunjunganSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratKunjunganSiswaController extends Controller
{
    //
    public function index()
    {
        if(Auth::user()->role == 'admin' or Auth::user()->role == 'guru'){

            $kunjungan = SuratKunjunganSiswa::with('user', 'nomorsurat', 'siswa')->get();
        }else{
            $kunjungan = SuratKunjunganSiswa::with('user', 'nomorsurat', 'siswa')->where('user_id', Auth::user()->id)->get();
        }

        $nomor_surat = NomorSurat::where('jumlah', 0)->get();
        $siswa = Siswa::all();

        return view('surat_kunjungan_siswa.index', compact('kunjungan', 'nomor_surat', 'siswa'));
    }

    public function insert(Request $request)
    {
        try {
            SuratKunjunganSiswa::create([
                'nomorsurat_id' => $request->nomorsurat_id,
                'user_id' => Auth::user()->id,
                'siswa_id' => $request->siswa_id,
                'izin_ke' => $request->izin_ke,
                'tahap' => $request->tahap,
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
            $kunjungan = SuratKunjunganSiswa::where('id', $id)->first();
            NomorSurat::where('id', $kunjungan->nomorsurat_id)->update([
                'jumlah' => 0,
            ]);

            SuratKunjunganSiswa::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Surat telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
