<?php

namespace App\Http\Controllers;

use App\Models\ProfilSekolah;
use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    //
    public function visi()
    {
        $visi = ProfilSekolah::select('visi')->first();
        return view('profilsekolah.visi.index', compact('visi'));
    }

    public function visi_update(Request $request)
    {
        try {
            ProfilSekolah::where('id', 1)->update(['visi' => $request->visi]);

            return redirect()->back()->with('success', 'Visi telah di update');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function misi()
    {
        $misi = ProfilSekolah::select('misi')->first();
        return view('profilsekolah.misi.index', compact('misi'));
    }

    public function misi_update(Request $request)
    {
        try {
            ProfilSekolah::where('id', 1)->update(['misi' => $request->misi]);

            return redirect()->back()->with('success', 'Misi telah di update');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function struktur_organisasi()
    {
        $struktur = ProfilSekolah::select('struktur_organisasi')->first();
        return view('profilsekolah.struktur_organisasi.index', compact('struktur'));
    }

    public function struktur_organisasi_upload(Request $request)
    {

        $request->validate([
            'struktur_organisasi' => 'required','mimes:png,jpg,jpeg,JPG',
        ]);

        $date = date('Ymd His gis');

        try {
            $produk = ProfilSekolah::find(1);

            if($request->hasFile('struktur_organisasi')){
                $request->file('struktur_organisasi')->move('admin/finlab.dexignzone.com/xhtml/images/struktur/', $date.$request->file('struktur_organisasi')->getClientOriginalName());
                $produk->struktur_organisasi = $date.$request->file('struktur_organisasi')->getClientOriginalName();
                $produk->save();
            }

            return redirect()->back()->with('success', 'Struktur Organisasi telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', 'Struktur Organisasi gagal diupdate');
        }
    }

    public function sejarah()
    {
        $sejarah = ProfilSekolah::select('sejarah')->first();
        return view('profilsekolah.sejarah.index', compact('sejarah'));
    }

    public function sejarah_update(Request $request)
    {
        $sejarah = ProfilSekolah::select('sejarah')->first();
        try {
            ProfilSekolah::where('id', 1)->update(['sejarah' => $request->sejarah]);

            return redirect()->back()->with('success', 'Sejarah telah di update');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
