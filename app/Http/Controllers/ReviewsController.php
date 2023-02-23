<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    //
    public function index()
    {
        $reviews = Reviews::with('user')->get();

        return view('reviews.index', compact('reviews'));
    }

    public function insert(Request $request)
    {
        try {
            Reviews::create([
                'user_id' => Auth::user()->id,
                'pesan' => $request->pesan,
            ]);
            return redirect()->back()->with('success', 'Review telah ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('info', $th->getMessage());
        }
    }
}
