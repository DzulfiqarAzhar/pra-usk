<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function get(){
        if(isset($id)) {
            $buku = Buku::findOrFail($id);
            return response()->json(["message" => "Berhasil Mengambil Data"]);
        } else {
            $buku = Buku::get();
            return response()->json(["message" => "Berhasil Mengambil Data"]);
        }
    }

    public function store(Request $request){
        $buku = Buku::create($request->all());
        return response()->json([]);
    }
}
