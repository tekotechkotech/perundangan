<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    
    use HasFactory, SoftDeletes;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama_produk',
        'deskripsi_produk',
        'harga',
        'stok'
    ];

    public function pemesananDetails(): HasMany
    {
        return $this->hasMany(PemesananDetail::class, 'produk_id');
    }

}
