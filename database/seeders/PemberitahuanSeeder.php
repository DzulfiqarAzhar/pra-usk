<?php

namespace Database\Seeders;

use App\Models\Pemberitahuan;
use Illuminate\Database\Seeder;

class PemberitahuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemberitahuan::create([
            'isi' => 'ini pesan',
            'level_user' => '',
            'status' => 'aktif'
        ]);

        Pemberitahuan::create([
            'isi' => 'test saja',
            'level_user' => '',
            'status' => 'nonaktif'
        ]);
    }
}
