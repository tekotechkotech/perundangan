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
                ->get(['produk.nama_produk', 'pemesanan_detail.jumlah', 'pemesanan_detail.harga']);

            $key->detail = $details->map(function ($item) {
                return [
                    'barang' => $item->nama_produk,
                    'qty' => $item->jumlah
                ];
            })->toArray();
            
            $key->total = $details->sum('harga');
        }

        // dd($a);

        $title = 'Pemesanan';

        return view('pemesanan', compact('a','title'));
    }
}
