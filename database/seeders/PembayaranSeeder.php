<?php

// database/seeders/PemesananSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PembayaranSeeder extends Seeder
{
    public function run()
    {
        $pemesanan = DB::table('pemesanan')->where('kode_pemesanan','KODE001')->first();

        DB::table('pembayaran')->insert([
            [
                'id_pembayaran' => Str::uuid(),
                'id_pemesanan' => $pemesanan->id_pemesanan,
                'nominal' => 15000,
                'tanggal_pembayaran' => now(),
                'metode_pembayaran' => 'cash',
                'deskripsi' => 'DP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pembayaran' => Str::uuid(),
                'id_pemesanan' => $pemesanan->id_pemesanan,
                'nominal' => 10000,
                'tanggal_pembayaran' => now(),
                'metode_pembayaran' => 'cash',
                'deskripsi' => 'Nyicil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan pemesanan lainnya sesuai kebutuhan
        ]);
    }
}
