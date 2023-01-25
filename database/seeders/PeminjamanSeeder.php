<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peminjaman::create([
            'user_id' => 2,
            'buku_id' => 3,
            'tanggal_peminjaman' => '2023-01-23',
            'tanggal_pengembalian' => '2023-01-24',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'baik',
            'denda' => ''
        ]);

        Peminjaman::create([
            'user_id' => 3,
            'buku_id' => 1,
            'tanggal_peminjaman' => '2023-01-23',
            'tanggal_pengembalian' => '2023-01-24',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'rusak',
            'denda' => 50000
        ]);
    }
}
