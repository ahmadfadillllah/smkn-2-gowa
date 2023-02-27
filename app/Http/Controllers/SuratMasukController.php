<?php

namespace App\Http\Controllers;

use App\Models\NomorSurat;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratMasukController extends Controller
{
    //
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $surat_masuk = SuratMasuk::with('user', 'nomorsurat')->get();
        }else{
            $surat_masuk = SuratMasuk::with('user', 'nomorsurat')->where('penerima', Auth::user()->id)->get();
        }

        $nomor_surat = NomorSurat::all();
        return view('suratmasuk.index', compact('surat_masuk', 'nomor_surat'));
    }

    public function insert(Request $request)
    {
        $date = date('YmdHisgis');

        $request->validate([
            'fileku' => 'required|mimes:docx,pdf',
        ],[
            'fileku.mimes' => 'Format file harus PDF / Docx'
        ]);
        try {

            $surat_masuk = new SuratMasuk;
            $surat_masuk->nomorsurat_id = $request->nomorsurat_id;
            $surat_masuk->penerima = Auth::user()->id;
            $surat_masuk->pengirim = $request->pengirim;
            $surat_masuk->perihal = $request->perihal;
            $surat_masuk->keterangan = $request->keterangan;

            if($request->hasFile('fileku')){
                $request->file('fileku')->move('admin/finlab.dexignzone.com/xhtml/file/', $date.$request->file('fileku')->getClientOriginalName());
                $surat_masuk->fileku = $date.$request->file('fileku')->getClientOriginalName();
            }
            $surat_masuk->save();

            return redirect()->back()->with('success', 'Surat masuk telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            SuratMasuk::where('id', $id)->update([
                'nomorsurat_id' => $request->nomorsurat_id,
                'pengirim' => $request->pengirim,
                'perihal' => $request->perihal,
                'keterangan' => $request->keterangan,
            ]);
            return redirect()->back()->with('success', 'Surat masuk telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            SuratMasuk::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Surat masuk telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
