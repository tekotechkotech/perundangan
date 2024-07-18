<?php

// database/seeders/PemesananSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PemesananDetailSeeder extends Seeder
{
    public function run()
    {
        $produk = DB::table('produk')->get();
        $pemesanan1 = DB::table('pemesanan')->where('kode_pemesanan', 'KODE001')->first();
        $pemesanan2 = DB::table('pemesanan')->where('kode_pemesanan', 'KODE002')->first();
        $data = DB::table('data')->first();
        $id_produk1 = isset($produk[0]) ? $produk[0]->id_produk : null;
        $id_produk2 = isset($produk[1]) ? $produk[1]->id_produk : null;

        DB::table('pemesanan_detail')->insert([
            [
                'id_pemesanan_detail' => Str::uuid(),
                'id_pemesanan' => $pemesanan1->id_pemesanan,
                'id_data' => $data->id_data, 
                'id_produk' => $id_produk1,
                'jumlah' => 2,
                'harga_total' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pemesanan_detail' => Str::uuid(),
                'id_pemesanan' => $pemesanan1->id_pemesanan,
                'id_data' => $data->id_data, 
                'id_produk' => $id_produk2,
                'jumlah' => 1,
                'harga_total' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan detail pemesanan lainnya sesuai kebutuhan
        ]);
    }
}