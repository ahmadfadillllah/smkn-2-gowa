<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $siswa = Siswa::with('kelas')->get();
        $kelas = Kelas::all();
        return view('siswa.index', compact('siswa', 'kelas'));
    }

    public function insert(Request $request)
    {
        try {
            Siswa::create([
                'kelas_id' => $request->kelas_id,
                'nis' => $request->nis,
                'nisn' => $request->nisn,
                'nama_siswa' => $request->nama_siswa,
                'nama_panggilan' => $request->nama_panggilan,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'no_hp' => $request->no_hp,
                'nama_wali' => $request->nama_wali,
                'no_hp_wali' => $request->no_hp_wali,
            ]);

            return redirect()->back()->with('success', 'Siswa telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            Siswa::where('id', $id)->update([
                'kelas_id' => $request->kelas_id,
                'nis' => $request->nis,
                'nisn' => $request->nisn,
                'nama_siswa' => $request->nama_siswa,
                'nama_panggilan' => $request->nama_panggilan,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'no_hp' => $request->no_hp,
                'nama_wali' => $request->nama_wali,
                'no_hp_wali' => $request->no_hp_wali,
            ]);
            return redirect()->back()->with('success', 'Siswa telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Siswa::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Siswa telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
