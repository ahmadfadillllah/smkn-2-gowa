<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Reviews;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $reviews = Reviews::with('user')->get();
        $berita = Berita::all();
        return view('dashboard.index', compact('reviews', 'berita'));
    }
}
