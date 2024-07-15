<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pemesanan_detail', function (Blueprint $table) {
            $table->uuid('id_pemesanan_detail')->primary();
            $table->uuid('id_pemesanan');
            $table->uuid('id_produk');
            $table->integer('jumlah');
            $table->integer('harga');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan')->onDelete('cascade');
            $table->foreign('id_produk')->references('id_produk')->on('produk')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemesanan_detail');
    }
};
