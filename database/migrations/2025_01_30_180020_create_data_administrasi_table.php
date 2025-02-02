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
        Schema::create('data_administrasi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('form_id');
            $table->json('persyaratan')->nullable();
            $table->string('nomor_akta_perkawinan')->nullable();
            $table->date('tanggal_akta_perkawinan')->nullable();
            $table->date('tanggal_cetak_kutipan_akta')->nullable();
            $table->string('nama_petugas_entri_data')->nullable();
            $table->string('nip_petugas_entri_data')->nullable();
            $table->date('tanggal_entri_data')->nullable();
            $table->timestamps();

            $table->foreign('form_id')->references('id')->on('form')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_administrasi');
    }
};
