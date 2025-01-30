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
        Schema::create('data_perkawinan', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('form_id');
            $table->date('tanggal_pemberkatan_perkawinan')->nullable();
            $table->date('tanggal_melapor')->nullable();
            $table->time('pukul')->nullable();
            $table->string('agama')->nullable();
            $table->string('kepercayaan')->nullable();
            $table->string('nama_organisasi_penghayat_kepercayaan')->nullable();
            $table->string('nama_badan_peradilan')->nullable();
            $table->string('nomor_putusan_pengadilan')->nullable();
            $table->date('tanggal_putusan_pengadilan')->nullable();
            $table->string('nama_pemuka_agama')->nullable();
            $table->string('ijin_perwakilan_bagi_wna_nomor')->nullable();
            $table->integer('jumlah_anak_terakui')->nullable();
            $table->json('nama_anak')->nullable();
            $table->json('no_tgl_akta_kelahiran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_perkawinan');
    }
};
