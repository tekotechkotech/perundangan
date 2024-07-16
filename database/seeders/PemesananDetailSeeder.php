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
        $produk1 = DB::table('produk')->where('nama_produk', 'Produk 1')->first();
        $produk2 = DB::table('produk')->where('nama_produk', 'Produk 2')->first();
        $pemesanan1 = DB::table('pemesanan')->where('kode_pemesanan', 'KODE001')->first();
        $pemesanan2 = DB::table('pemesanan')->where('kode_pemesanan', 'KODE002')->first();

        DB::table('pemesanan_detail')->insert([
            [
                'id_pemesanan_detail' => Str::uuid(),
                'id_pemesanan' => $pemesanan1->id_pemesanan,
                'id_produk' => $produk1->id_produk,
                'jumlah' => 2,
                'harga_total' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pemesanan_detail' => Str::uuid(),
                'id_pemesanan' => $pemesanan1->id_pemesanan,
                'id_produk' => $produk2->id_produk,
                'jumlah' => 1,
                'harga_total' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan detail pemesanan lainnya sesuai kebutuhan
        ]);
    }
}