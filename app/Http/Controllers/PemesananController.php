<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pemesanan;
use App\Models\PemesananDetail;
use App\Models\Produk;
use App\Models\User;
use App\Models\Data;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PemesananController extends Controller
{

    public function index()
    {
        // $a = Pemesanan::all();

        // $a = Pemesanan::with(['user', 'data.detail'])->get();
        // Ambil semua pemesanan
        $pemesananList = Pemesanan::all();

        // Array untuk menyimpan data pemesanan dengan relasi
        $result = [];

        // Iterasi melalui setiap pemesanan
        foreach ($pemesananList as $pemesanan) {
            // Ambil user yang terkait dengan pemesanan
            $user = User::find($pemesanan->id_user);

            // Ambil data yang terkait dengan pemesanan
            $dataList = Data::where('id_pemesanan', $pemesanan->id_pemesanan)->get();

            // Array untuk menyimpan data detail
            $dataResult = [];
            $total=0;
            // Iterasi melalui setiap data yang terkait dengan pemesanan
            foreach ($dataList as $data) {
                // Ambil detail yang terkait dengan data
                $detailList = PemesananDetail::where('id_data', $data->id_data)->join('produk', 'pemesanan_detail.id_produk', 'produk.id_produk')->get();

                // Tambahkan detail ke data
                $dataResult[] = [
                    'type' => $data->type,
                    'detail' => $detailList,
                ];

                $total = $detailList->sum('harga_total');
            }

            // Tambahkan pemesanan dengan relasi ke result
            $result[] = [
                'kode_pemesanan' => $pemesanan->kode_pemesanan,
                'tanggal_pemesanan' => $pemesanan->tanggal_pemesanan,
                'user' => $user->name,
                'data' => $dataResult,
                'total' => $total,
            ];
        }

        $a = $result;


        // dd($a);
        $page = 'pemesanan';
        $title = 'Pemesanan';

        return view('pemesanan', compact('a', 'page', 'title'));
    }

    public function pemesananDetail($id, $apa)
    {
        $a = Pemesanan::where('kode_pemesanan', $id)
            ->join('user', 'pemesanan.id_user', 'user.id_user')
            ->first();

        // dd($a);

        $b = PemesananDetail::where('id_pemesanan', $a->id_pemesanan)
            ->join('produk', 'pemesanan_detail.id_produk', 'produk.id_produk')
            ->get();

        $ada = 0;
        foreach ($b as $key) {
            // dd($key);
            $ada += $key->harga_total;
        }


        $a->total_harga = $ada ?? 0;


        $c = Pembayaran::where('id_pemesanan', $a->id_pemesanan)->orderBy('tanggal_pembayaran', 'asc')->get();

        $a->dibayar = $c->sum('nominal');

        $page = 'pemesanan';
        $title = 'Pemesanan Detail';

        // dd($a);

        return view('pemesanan-detail', compact('a', 'b', 'c', 'page', 'title', 'apa'));
    }

    public function pembayaran(Request $request)
    {
        // dd('sini');
        // Validasi data
        $request->validate([
            'nominal' => 'required|numeric',
            'metode_pembayaran' => 'required|string|max:255',
            'keterangan' => 'nullable|string|max:255',
        ]);

        // dd($request->id_pemesanan);
        // Simpan data ke dalam database
        Pembayaran::create([
            'id_pembayaran' => Str::uuid()->toString(),
            'id_pemesanan' => $request->id_pemesanan,
            'nominal' => (int)$request->nominal,
            'metode_pembayaran' => $request->metode_pembayaran,
            'deskripsi' => $request->keterangan,
            'tanggal_pembayaran' => Carbon::now(),
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Pembayaran berhasil ditambahkan!');
    }

    public function add($apa) {


        
        $page = 'pemesanan';
        $title = 'Tambah Pesanan';
        return view('pemesanan-tambah',compact('apa','title','page'));
    }
}
