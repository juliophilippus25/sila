<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class DataAdministrasi extends Model
{
    use HasFactory;

    protected $table = 'data_administrasi';

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
        'persyaratan',
        'nomor_akta_perkawinan',
        'tanggal_akta_perkawinan',
        'tanggal_cetak_kutipan_akta',
        'nama_petugas_entri_data',
        'nip_petugas_entri_data',
        'tanggal_entri_data',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }
}
