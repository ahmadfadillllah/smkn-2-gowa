<?php

namespace Database\Seeders;

use App\Models\ProfilSekolah;
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
        User::insert([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Admin354@'),
            'avatar' => 'user.png',
            'role' => 'admin',
            'no_hp' => '081586617185'
        ]);

        ProfilSekolah::insert([
            'visi' => NULL,
            'misi' => NULL,
            'struktur_organisasi' => NULL,
            'sejarah' => NULL,
        ]);
    }
}
