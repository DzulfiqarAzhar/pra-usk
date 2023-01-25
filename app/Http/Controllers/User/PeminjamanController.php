<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index(){
        $title = 'Peminjaman';
        $peminjamans = Peminjaman::where('user_id', Auth::user()->id)->get();
        return view('user.peminjaman', compact('peminjamans', 'title'));
    }

    public function create(){
        $title = 'Pinjam Buku';
        $bukus = Buku::all();
        return view('user.form_peminjaman', compact('title', 'bukus'));
    }

    public function store(Request $request){
        $tanggal_peminjaman = $request->tanggal_peminjaman;
        $tanggal_pengembalian = $request->tanggal_pengembalian;
        $buku_id = $request->buku_id;
        $kondisi_buku_saat_dipinjam = $request->kondisi_buku_saat_dipinjam;

        $peminjaman = Peminjaman::create([
            "tanggal_peminjaman" => $tanggal_peminjaman,
            "tanggal_pengembalian" => $tanggal_pengembalian,
            "buku_id" => $buku_id,
            "kondisi_buku_saat_dipinjam" => $kondisi_buku_saat_dipinjam,
            "user_id" => Auth::user()->id
        ]);

        if ($peminjaman) {
            return redirect()->route('user.peminjaman')->with("status", "success")
            ->with("message", "Berhasil Meminjam Buku");
        }
        return redirect()->back()->with("status", "danger")
        ->with("message", "Gagal Meminjam Buku");
    }
}
