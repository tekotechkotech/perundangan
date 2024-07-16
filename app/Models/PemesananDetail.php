<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PemesananDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pemesanan_detail';
    protected $primaryKey = 'id_pemesanan_detail';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_pemesanan_detail',
        'id_pemesanan',
        'id_produk',
        'jumlah',
        'harga_total'
    ];

    protected $casts = [
        'id_pemesanan_detail' => 'string',
    ];

    public function pemesanan(): BelongsTo
    {
        return $this->belongsTo(Pemesanan::class, 'id_pemesanan');
    }

    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

}
