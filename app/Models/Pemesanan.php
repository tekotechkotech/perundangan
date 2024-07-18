<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemesanan extends Model
{
    
    use HasFactory, SoftDeletes;

    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_pemesanan',
        'kode_pemesanan',
        'id_user',
        'tanggal_pemesanan'
    ];

    protected $casts = [
        'id_pemesanan' => 'string',
        'tanggal_pemesanan' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function details(): HasMany
    {
        return $this->hasMany(PemesananDetail::class, 'id_pemesanan');
    }

    public function data(): HasMany
    {
        return $this->hasMany(PemesananDetail::class, 'id_pemesanan');
    }

    public function pembayaran(): HasMany
    {
        return $this->hasMany(pembayaran::class, 'id_pemesanan');
    }
}
