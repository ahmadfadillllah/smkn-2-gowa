<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    public function insert(Request $request)
    {
        try {
            Kelas::create([
                'tingkat' => $request->tingkat,
                'nama' => $request->nama,
            ]);

            return redirect()->back()->with('success', 'Kelas telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update($id, Request $request)
    {

        try {
            Kelas::where('id', $id)->update([
                'tingkat' => $request->tingkat,
                'nama' => $request->nama,
            ]);

            return redirect()->back()->with('success', 'Kelas telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Kelas::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Kelas telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
