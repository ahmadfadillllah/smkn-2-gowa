<?php

namespace App\Http\Controllers;

use App\Models\NomorSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NomorSuratController extends Controller
{
    //
    public function index()
    {
        $nomor_surat = NomorSurat::with('user')->get();
        return view('nomorsurat.index', compact('nomor_surat'));
    }

    public function insert(Request $request)
    {
        try {
            NomorSurat::create([
                'user_id' => Auth::user()->id,
                'id_surat' => $request->id_surat,
                'nomor_surat' => $request->nomor_surat,
                'perihal' => $request->perihal,
                'jumlah' => 0,
            ]);

            return redirect()->back()->with('success', 'Nomor Surat telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            NomorSurat::where('id', $id)->update([
                'id_surat' => $request->id_surat,
                'nomor_surat' => $request->nomor_surat,
                'perihal' => $request->perihal,
            ]);
            return redirect()->back()->with('success', 'Siswa telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            NomorSurat::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Nomor Surat telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

}
