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
                'nama_produk' => 'Sorog 1/2',
                'warna_produk' => 'FFF8DC',
                'text_produk' => 'dark',
                'deskripsi_produk' => 'Deskripsi produk 1',
                'harga' => 500,
                'stok' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_produk' => Str::uuid()->toString(),
                'nama_produk' => 'Undangan Lion 320',
                'warna_produk' => '00008B',
                'text_produk' => 'light',
                'deskripsi_produk' => 'Deskripsi produk 2',
                'harga' => 2000,
                'stok' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan produk lainnya sesuai kebutuhan
        ]);
    }
}
