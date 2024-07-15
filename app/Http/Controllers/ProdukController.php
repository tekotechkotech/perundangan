<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\PemesananDetail;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    public function index()
    {
        $a = Produk::all();
        

        foreach ($a as $key) {
            $hexColor = "#".$key->warna_produk;
            if ($this->isLightColor($hexColor)) {
                $key->text="dark";
            } else {
                $key->text="light";
            }
        }

        $title = 'Produk';

        return view('produk', compact('a','title'));
    }

    function isLightColor($hexColor) {
        // Remove the '#' if it's there
        $hexColor = ltrim($hexColor, '#');
    
        // Convert hex to RGB
        $r = hexdec(substr($hexColor, 0, 2));
        $g = hexdec(substr($hexColor, 2, 2));
        $b = hexdec(substr($hexColor, 4, 2));
    
        // Calculate the brightness
        // Formula: (0.299*R + 0.587*G + 0.114*B)
        $brightness = (0.299 * $r + 0.587 * $g + 0.114 * $b) / 255;
    
        // Return true if the color is light, false if dark
        return $brightness > 0.5;
    }
    
}
