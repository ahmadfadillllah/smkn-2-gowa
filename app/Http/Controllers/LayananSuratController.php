<?php

namespace App\Http\Controllers;

use App\Mail\LayananSurat;
use App\Models\Layanan;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;

class LayananSuratController extends Controller
{
    //
    public function index()
    {
        $layanan = Layanan::all();
        return view('layanan.index', compact('layanan'));
    }

    public function update($id, Request $request)
    {

        try {
            Layanan::where('id', $id)->update([
                'status' => $request->status,
                'keterangan' => $request->keterangan,
            ]);

            return redirect()->back()->with('success', 'Request surat telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }

    public function send($id)
    {
        try {
            $user = Layanan::where('id', $id)->first();
            $details = [
            'email' => $user->email,
            'nisn' => $user->nisn,
            'surat' => $user->surat,
            'pesan' => $user->pesan,
            'status' => $user->status,
            'keterangan' => $user->keterangan,
            ];

            Mail::to($user->email)->send(new LayananSurat($details));

            return redirect()->back()->with('success', 'Request surat telah dikirim ke email');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
