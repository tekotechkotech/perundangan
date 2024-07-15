<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->uuid('id_produk')->primary();
            $table->string('nama_produk');
            $table->text('deskripsi_produk')->nullable();
            $table->integer('harga');
            $table->integer('stok');
            $table->timestamps();
            $table->softDeletes();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
