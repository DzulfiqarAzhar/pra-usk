<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buku::create([
            'judul' => 'Cara Meningkatkan Mood Belajar',
            'kategori_id' => 1,
            'penerbit_id' => 1,
            'pengarang' => 'Asep',
            'tahun_terbit' => 2005,
            'isbn' => '4912246931778',
            'j_buku_baik' => 10,
            'j_buku_rusak' => 1,
            'foto' => ''
        ]);
        
        Buku::create([
            'judul' => 'Sejarah Kemerdekaan Indonesia',
            'kategori_id' => 3,
            'penerbit_id' => 2,
            'pengarang' => 'Ucup',
            'tahun_terbit' => 2006,
            'isbn' => '5867345821971',
            'j_buku_baik' => 8,
            'j_buku_rusak' => 2,
            'foto' => ''
        ]);

        Buku::create([
            'judul' => 'Luar Angkasa dan Sekitarnya',
            'kategori_id' => 2,
            'penerbit_id' => 1,
            'pengarang' => 'Budi',
            'tahun_terbit' => 2003,
            'isbn' => '9817248921374',
            'j_buku_baik' => 13,
            'j_buku_rusak' => 1,
            'foto' => ''
        ]);
    }
}
