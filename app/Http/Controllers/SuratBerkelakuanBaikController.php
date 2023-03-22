<?php

namespace App\Http\Controllers;

use App\Models\NomorSurat;
use App\Models\Siswa;
use App\Models\SuratBerkelakuanBaik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratBerkelakuanBaikController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin'){

            $baik = SuratBerkelakuanBaik::with('user', 'nomorsurat', 'siswa')->get();
        }else{
            $baik = SuratBerkelakuanBaik::with('user', 'nomorsurat', 'siswa')->where('user_id', Auth::user()->id)->get();
        }

        $nomor_surat = NomorSurat::where('jumlah', 0)->get();
        $siswa = Siswa::all();

        return view('surat_berkelakuan_baik.index', compact('baik', 'nomor_surat', 'siswa'));
    }

    public function insert(Request $request)
    {
        try {
            SuratBerkelakuanBaik::create([
                'nomorsurat_id' => $request->nomorsurat_id,
                'user_id' => Auth::user()->id,
                'siswa_id' => $request->siswa_id,
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
            $baik = SuratBerkelakuanBaik::where('id', $id)->first();
            NomorSurat::where('id', $baik->nomorsurat_id)->update([
                'jumlah' => 0,
            ]);

            SuratBerkelakuanBaik::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Surat telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
