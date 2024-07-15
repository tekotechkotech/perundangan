<?php

// database/seeders/PemesananSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PemesananSeeder extends Seeder
{
    public function run()
    {
        $user = DB::table('user')->first();

        DB::table('pemesanan')->insert([
            [
                'id_pemesanan' => Str::uuid(),
                'kode_pemesanan' => 'KODE001',
                'id_user' => $user->id_user, 
                'tanggal_pemesanan' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pemesanan' => Str::uuid(),
                'kode_pemesanan' => 'KODE002',
                'id_user' => $user->id_user, 
                'tanggal_pemesanan' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan pemesanan lainnya sesuai kebutuhan
        ]);
    }
}
