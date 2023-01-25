<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $bukus = Buku::all();
        return view('user.dashboard', compact('title', 'bukus'));
    }

    public function create(Request $request){
        $title = 'Dashboard Pinjam';
        $buku_id = $request->buku_id;
        $bukus = Buku::all();
        return view('user.form_peminjaman', compact("bukus", "buku_id", "title"));
    }
}
