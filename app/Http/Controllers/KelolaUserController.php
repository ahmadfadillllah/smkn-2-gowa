<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KelolaUserController extends Controller
{
    //
    public function index()
    {
        $users = User::where('role', '!=', 'admin')->get();
        return view('users.index', compact('users'));
    }

    public function reset_password($id)
    {
        try {
            User::whereId($id)->update([
                'password' => Hash::make('PasswordDefault123@')
            ]);

            return redirect()->back()->with('success', 'Reset Password berhasil');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }

    }

    public function destroy($id)
    {
        try {
            User::where('id', $id)->delete();
            return redirect()->back()->with('success', 'Akun telah dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
