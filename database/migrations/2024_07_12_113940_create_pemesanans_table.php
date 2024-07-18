<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->uuid('id_pemesanan')->primary();
            $table->string('kode_pemesanan')->unique();
            $table->uuid('id_user');
            $table->timestamp('tanggal_pemesanan');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
