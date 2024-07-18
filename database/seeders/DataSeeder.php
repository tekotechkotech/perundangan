<?php

// database/seeders/PemesananSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DataSeeder extends Seeder
{
    public function run()
    {
        $pemesanan = DB::table('pemesanan')->where('kode_pemesanan','KODE001')->first();

        DB::table('data')->insert([
            'id_data' => Str::uuid(),
            'id_pemesanan' => $pemesanan->id_pemesanan, // Gantilah dengan UUID yang valid dari tabel pemesan
            'id_user' => $pemesanan->id_user, // Gantilah dengan UUID yang valid dari tabel pemesan
            'type' => 'nikah',
            'text' => 'Contoh teks',
            'nama_p1' => 'Nama P1',
            'bpk_p1' => 'Bapak P1',
            'ibu_p1' => 'Ibu P1',
            'nama_p2' => 'Nama P2',
            'bpk_p2' => 'Bapak P2',
            'ibu_p2' => 'Ibu P2',
            'alamat_acara' => 'Alamat Acara',
            'tgl_waktu_acara' => now(),
            'hiburan_acara' => 'Hiburan Acara',
            'alamat_akad' => 'Alamat Akad',
            'tgl_waktu_akad' => now(),
            'yg_bahagia' => 'Yang Bahagia',
            'turun_mengundang' => 'Turun Mengundang',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}