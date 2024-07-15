<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        DB::table('produk')->insert([
            [
                'id_produk' => Str::uuid()->toString(),
                'nama_produk' => 'Produk 1',
                'deskripsi_produk' => 'Deskripsi produk 1',
                'harga' => 10000,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_produk' => Str::uuid()->toString(),
                'nama_produk' => 'Produk 2',
                'deskripsi_produk' => 'Deskripsi produk 2',
                'harga' => 20000,
                'stok' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan produk lainnya sesuai kebutuhan
        ]);
    }
}
