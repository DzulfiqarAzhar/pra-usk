<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'kode' => '01',
            'nama' => 'umum'
        ]);

        Kategori::create([
            'kode' => '02',
            'nama' => 'sains'
        ]);

        Kategori::create([
            'kode' => '03',
            'nama' => 'sejarah'
        ]);
    }
}
