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
            $table->uuid('id')->primary();
            $table->string('form_id');
            $table->string('nik')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->enum('pendidikan_terakhir', ['Belum Sekolah', 'Belum Tamat SD', 'SD/Sederajat','SLTP', 'SLTA', 'D1', 'D2', 'D3', 'S1', 'S2', 'S3'])->nullable();
            $table->enum('agama', ['Islam', 'Kriten', 'Katolik', 'Hindu', 'Budha', 'Konghucu', 'Penghayat Kepercayaan','Lainnya'])->nullable();
            $table->string('organisasi_penghayat')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->date('tempat_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('telepon')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->timestamps();

            $table->foreign('form_id')->references('id')->on('form')->onDelete('cascade');
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
