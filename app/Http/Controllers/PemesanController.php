<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\PemesananDetail;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class PemesanController extends Controller
{

    public function index()
    {
        $a = User::where('role','pemesan')->get();
        

        // foreach ($a as $key) {
        //     $hexColor = "#".$key->warna_produk;
        //     if ($this->isLightColor($hexColor)) {
        //         $key->text="dark";
        //     } else {
        //         $key->text="light";
        //     }
        // }
        
        foreach ($a as $key) {
            $key->user = User::where('id_user', $key->id_user)->first()->name;

            
            $details = Pemesanan::where('id_user', $key->id_user)
                ->join('pemesanan_detail', 'pemesanan.id_pemesanan', '=', 'pemesanan_detail.id_pemesanan')
                ->get([ 'pemesanan.kode_pemesanan', 'pemesanan_detail.harga']);

            $key->detail = $details->map(function ($item) {
                return [
                    'kode_pemesanan' => $item->kode_pemesanan,
                ];
            })->toArray();
            
            $key->total = $details->sum('harga');
        }

        $page = 'pemesan';
        $title = 'Pemesan';

        return view('pemesan', compact('a','page','title'));
    }

    
}
