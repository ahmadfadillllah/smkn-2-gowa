<?php

namespace App\Http\Controllers;

use App\Imports\GuruImport;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class GuruController extends Controller
{
    //
    public function index()
    {
        $guru = Guru::with('user')->get();
        return view('guru.index', compact('guru'));
    }

    public function insert(Request $request)
    {
        $date = date('YmdHisgis');

        $request->validate([
            'nip' => 'required|unique:guru,nip',
        ],[
            'nip.unique' => 'NIP sudah terdaftar'
        ]);

        try {

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'guru';
            $user->no_hp = $request->no_hp;

            if($request->hasFile('avatar')){
                $request->file('avatar')->move('admin/finlab.dexignzone.com/xhtml/images/avatar/', $date.$request->file('avatar')->getClientOriginalName());
                $user->avatar = $date.$request->file('avatar')->getClientOriginalName();
            }
            $user->save();

            $request->request->add(['user_id' => $user->id]);
            Guru::create([
                'user_id' => $request->user_id,
                'nip' => $request->nip,
                'mata_pelajaran' => $request->mata_pelajaran,
            ]);

            return redirect()->route('guru.index')->with('success', 'Guru telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('guru.index')->with('info', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $date = date('YmdHisgis');

        try {
            $user = User::find($request->user_id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->no_hp = $request->no_hp;

            if($request->hasFile('avatar')){
                $request->file('avatar')->move('admin/finlab.dexignzone.com/xhtml/images/avatar/', $date.$request->file('avatar')->getClientOriginalName());
                $user->avatar = $date.$request->file('avatar')->getClientOriginalName();
            }
            $user->save();

            Guru::where('id', $id)->update([
                'user_id' => $request->user_id,
                'nip' => $request->nip,
                'mata_pelajaran' => $request->mata_pelajaran,
            ]);

            return redirect()->route('guru.index')->with('success', 'Data guru telah diupdate');
        } catch (\Throwable $th) {
            return redirect()->route('guru.index')->with('info', $th->getMessage());
        }
    }

    public function importGuru(Request $request)
    {
        try {
            Excel::import(new GuruImport, $request->file);
            return redirect()->back()->with('success', 'Data berhasil diimport');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }

    }
}
