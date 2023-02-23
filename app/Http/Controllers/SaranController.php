<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    //
    public function index()
    {
        $saran = Saran::all();
        return view('saran.index', compact('saran'));
    }

    public function destroy($id)
    {
        try {
            Saran::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Saran/masukan telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
