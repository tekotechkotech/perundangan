<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\PemesananDetail;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class PemesananController extends Controller
{

    public function index()
    {
        $a = Pemesanan::all();
        foreach ($a as $key) {
            $key->user = User::where('id_user', $key->id_user)->first()->name;

            
            $details = PemesananDetail::where('id_pemesanan', $key->id_pemesanan)
                ->join('produk', 'pemesanan_detail.id_produk', '=', 'produk.id_produk')
                ->get(['produk.nama_produk','produk.warna_produk','produk.text_produk', 'pemesanan_detail.jumlah', 'pemesanan_detail.harga']);

            $key->detail = $details->map(function ($item) {
                return [
                    'barang' => $item->nama_produk,
                    'qty' => $item->jumlah,
                    'warna' => $item->warna_produk,
                    'text' => $item->text_produk
                ];
            })->toArray();
            
            $key->total = $details->sum('harga');
        }

        // dd($a);

        $page = 'pemesanan';
        $title = 'Pemesanan';

        return view('pemesanan', compact('a','page','title'));
    }

    public function pemesananDetail($id) {
        $a = Pemesanan::where('kode_pemesanan',$id)
        ->join('user','pemesanan.id_user','user.id_user')
                ->first();

        // dd($a);

        $b = PemesananDetail::where('id_pemesanan',$a->id_pemesanan)
        ->join('produk','pemesanan_detail.id_produk','produk.id_produk')
        ->get();

        $ada=0;
        foreach ($b as $key) {
            // dd($key);
            $ada += $key->harga;
        }

        $a->total_harga = $ada??0;

        // dd($a);

        $page = 'pemesanan';
        $title = 'Pemesanan Detail';

        return view('pemesanan-detail', compact('a','b','page','title'));

    }
}
