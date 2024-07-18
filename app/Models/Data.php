<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data';
    protected $primaryKey = 'id_data';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_data',
        'id_pemesan',
        'id_pemesanan',
        'type',
        'text',
        'nama_p1',
        'bpk_p1',
        'ibu_p1',
        'nama_p2',
        'bpk_p2',
        'ibu_p2',
        'alamat_acara',
        'tgl_waktu_acara',
        'hiburan_acara',
        'alamat_akad',
        'tgl_waktu_akad',
        'yg_bahagia',
        'turun_mengundang',
    ];

    public function pemesan()
    {
        return $this->belongsTo(Pemesan::class, 'id_pemesan', 'id_pemesan');
    }
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan', 'id_pemesanan');
    }
    public function detail()
    {
        return $this->hasMany(PemesananDetail::class, 'id_pemesanan_detail', 'id_pemesanan_detail');
    }
}
