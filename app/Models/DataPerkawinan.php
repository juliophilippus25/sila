<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DataPerkawinan extends Model
{
    use HasFactory;

    protected $table = 'data_perkawinan';

    protected $primaryKey = 'id';

    public $incrementing = false;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->id) {
                $model->id = (string) Str::uuid();
            }
        });
    }
    protected $fillable = [
        'form_id',
        'tanggal_pemberkatan_perkawinan',
        'tanggal_melapor',
        'pukul',
        'pendidikan_terakhir',
        'agama',
        'organisasi_penghayat',
        'nama_badan_peradilan',
        'nomor_putusan_pengadilan',
        'tanggal_putusan_pengadilan',
        'nama_pemuka_agama',
        'ijin_perwakilan_bagi_wna_nomor',
        'jumlah_anak_terakui',
        'nama_anak',
        'no_tgl_akta_kelahiran',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }
}
