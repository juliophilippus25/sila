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
            $table->uuid('id')->primary();
            $table->string('form_id');
            $table->date('tanggal_pemberkatan_perkawinan')->nullable();
            $table->date('tanggal_melapor')->nullable();
            $table->time('pukul')->nullable();
            $table->enum('pendidikan_terakhir', ['Belum Sekolah', 'Belum Tamat SD', 'SD/Sederajat','SLTP', 'SLTA', 'D1', 'D2', 'D3', 'S1', 'S2', 'S3'])->nullable();
            $table->enum('agama', ['Islam', 'Kriten', 'Katolik', 'Hindu', 'Budha', 'Konghucu', 'Penghayat Kepercayaan','Lainnya'])->nullable();
            $table->string('organisasi_penghayat')->nullable();
            $table->string('nama_badan_peradilan')->nullable();
            $table->string('nomor_putusan_pengadilan')->nullable();
            $table->date('tanggal_putusan_pengadilan')->nullable();
            $table->string('nama_pemuka_agama')->nullable();
            $table->string('ijin_perwakilan_bagi_wna_nomor')->nullable();
            $table->integer('jumlah_anak_terakui')->nullable();
            $table->json('nama_anak')->nullable();
            $table->json('no_tgl_akta_kelahiran')->nullable();
            $table->timestamps();

            $table->foreign('form_id')->references('id')->on('form')->onDelete('cascade');
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
