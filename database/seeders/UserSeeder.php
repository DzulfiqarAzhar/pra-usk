<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode' => 'A01',
            'nis' => '12345',
            'fullname' => 'Alter',
            'username' => 'alter',
            'password' => Hash::make('password'),
            'verif' => 'verified',
            'role' => 'admin',
            'join_date' => '2023-01-24'
        ]);

        User::create([
            'kode' => 'A02',
            'nis' => '13524',
            'fullname' => 'Dzulfiqar',
            'username' => 'dzulfiqar',
            'password' => Hash::make('password'),
            'kelas' => 'XII RPL',
            'verif' => 'verified',
            'role' => 'user',
            'join_date' => '2023-01-24'
        ]);

        User::create([
            'kode' => 'A03',
            'nis' => '15243',
            'fullname' => 'Azhar',
            'username' => 'azhar',
            'password' => Hash::make('password'),
            'kelas' => 'XII OTKP',
            'verif' => 'verified',
            'role' => 'user',
            'join_date' => '2023-01-24'
        ]);
    }
}
