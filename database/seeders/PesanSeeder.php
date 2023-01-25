<?php

namespace Database\Seeders;

use App\Models\Pesan;
use Illuminate\Database\Seeder;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesan::create([
            'penerima_id' => 2,
            'pengirim_id' => 1,
            'judul' => 'pengembalian buku',
            'isi' => 'tolong kembalikan buku segera',
            'status' => 'terbaca',
            'tanggal_kirim' => '2023-01-24'
        ]);

        Pesan::create([
            'penerima_id' => 3,
            'pengirim_id' => 1,
            'judul' => 'pengembalian buku',
            'isi' => 'mohon mengembalikan buku sesuai waktunya',
            'status' => 'terkirim',
            'tanggal_kirim' => '2023-01-24'
        ]);
    }
}
