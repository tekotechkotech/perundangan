<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data', function (Blueprint $table) {
            $table->uuid('id_data')->primary();
            $table->uuid('id_user');
            $table->uuid('id_pemesanan');
            $table->enum('type', ['nikah', 'khitan', 'nama_anak', 'banner']);
            $table->text('text')->nullable();
            $table->string('nama_p1');
            $table->string('bpk_p1');
            $table->string('ibu_p1');
            $table->text('keterangan_p1')->nullable();
            $table->string('nama_p2')->nullable();
            $table->string('bpk_p2')->nullable();
            $table->string('ibu_p2')->nullable();
            $table->text('keterangan_p2')->nullable();
            $table->string('alamat_acara');
            $table->dateTime('tgl_waktu_acara');
            $table->string('hiburan_acara')->nullable();
            $table->string('alamat_akad')->nullable();
            $table->dateTime('tgl_waktu_akad')->nullable();
            $table->text('yg_bahagia')->nullable();
            $table->text('turun_mengundang')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data');
    }
};
