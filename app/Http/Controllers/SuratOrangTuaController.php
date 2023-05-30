<?php

namespace App\Http\Controllers;

use App\Models\NomorSurat;
use App\Models\Siswa;
use App\Models\SuratOrangTua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratOrangTuaController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin' or Auth::user()->role == 'guru'){

            $orangtua = SuratOrangTua::with('user', 'nomorsurat', 'siswa')->get();
        }else{
            $orangtua = SuratOrangTua::with('user', 'nomorsurat', 'siswa')->where('user_id', Auth::user()->id)->get();
        }

        $nomor_surat = NomorSurat::where('jumlah', 0)->get();
        $siswa = Siswa::all();

        return view('surat_orang_tua.index', compact('orangtua', 'nomor_surat', 'siswa'));
    }

    public function insert(Request $request)
    {
        try {
            SuratOrangTua::create([
                'nomorsurat_id' => $request->nomorsurat_id,
                'user_id' => Auth::user()->id,
                'siswa_id' => $request->siswa_id,
                'kegiatan' => $request->kegiatan,
                'tanggal_kegiatan' => $request->tanggal_kegiatan,
                'tempat' => $request->tempat,
                'keterangan' => $request->keterangan,
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
            $orangtua = SuratOrangTua::where('id', $id)->first();
            NomorSurat::where('id', $orangtua->nomorsurat_id)->update([
                'jumlah' => 0,
            ]);

            SuratOrangTua::where('id', $id)->delete();

            return redirect()->back()->with('success', 'Surat telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
