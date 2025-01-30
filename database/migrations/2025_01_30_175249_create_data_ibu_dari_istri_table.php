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
        Schema::create('data_ibu_dari_istri', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('form_id');
            $table->string('nik')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('agama')->nullable()->nullable();
            $table->string('kepercayaan')->nullable()->nullable();
            $table->string('nama_organisasi_penghayat_kepercayaan')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('telepon')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kab_kota')->nullable();
            $table->string('propinsi')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ibu_dari_istri');
    }
};
