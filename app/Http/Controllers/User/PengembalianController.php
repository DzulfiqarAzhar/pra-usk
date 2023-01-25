<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    public function index(){
        $title = 'Pengembalian';
        $judul = Peminjaman::where('user_id', Auth::user()->id)
        ->where('tanggal_pengembalian','!=', null)
        ->get();
        return view('user.pengembalian', compact('judul', 'title'));
    }

    public function create(){
        $title = 'Pengembalian Buku';
        $bukus = Buku::all();
        $judul = Peminjaman::where('user_id', Auth::user()->id)
        ->where('tanggal_pengembalian', null)
        ->get();
        return view('user.form_pengembalian', compact('judul', 'title', 'bukus'));
    }

    public function store(Request $request)
    {
        $pengembalian = Peminjaman::where('user_id', Auth::user()->id)
        ->where('buku_id', $request->buku_id)
        ->where('tanggal_pengembalian', null)
        ->first();

        $pengembalian->update([
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'kondisi_buku_saat_dikembalikan' => $request->kondisi_buku_saat_dikembalikan
        ]);

        $buku = Buku::where('id', $request->buku_id)->first();

        if($request->kondisi_buku_saat_dikembalikan == 'baik') {
            $buku->update([
                'j_buku_baik' => $buku->j_buku_baik + 1
            ]);
        }
        if($pengembalian->kondisi_buku_saat_dipinjam == 'rusak' && $request->kondisi_buku_saat_dikembalikan =='rusak') {
            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak + 1 
            ]);
            $pengembalian->update([
                'denda' => 0
            ]);
        }
        if($pengembalian->kondisi_buku_saat_dipinjam != 'rusak' && $request->kondisi_buku_saat_dikembalikan == 'rusak') {
            $buku->update([
                'j_buku_rusak' => $buku->j_buku_rusak + 1
            ]);
            $pengembalian->update([
                'denda' => 20000
            ]);
        }
        
        if($request->kondisi_buku_saat_dikembalikan == 'hilang') {
            $pengembalian->update([
                'denda' => 50000
            ]);
        }

        return redirect()->route('user.pengembalian');
    }
}
