<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Seeder;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Penerbit::create([
            'kode' => 'el',
            'nama' => 'Erlangga',
            'verif' => 'verified'
        ]);

        Penerbit::create([
            'kode' => 'gm',
            'nama' => 'Gramedia',
            'verif' => 'verified'
        ]);
    }
}
