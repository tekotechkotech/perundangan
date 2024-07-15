<?php

// database/seeders/PemesananSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            [
                'id_user' => Str::uuid()->toString(),
                'name' => 'User 1',
                'email' => 'user1@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_user' => Str::uuid()->toString(),
                'name' => 'User 2',
                'email' => 'user2@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan pengguna lainnya sesuai kebutuhan
        ]);
    }
}