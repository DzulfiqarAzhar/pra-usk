<?php

namespace Database\Seeders;

use App\Models\Identitas;
use Illuminate\Database\Seeder;

class IdentitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Identitas::create([
            'nama_app' => 'Tutor LSP_PERPUS',
            'alamat_app' => 'Jl. SMEA6',
            'email_app' => 'lsp.perpus@gmail.com',
            'nomor_hp' => '081357369827',
            'foto' => ''
        ]);
    }
}
