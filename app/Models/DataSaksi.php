<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DataSaksi extends Model
{
    use HasFactory;

    protected $table = 'data_saksi';

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
        'urutan',
        'nik',
        'nama_lengkap',
        'pendidikan_terakhir',
        'agama',
        'organisasi_penghayat',
        'tanggal_lahir',
        'alamat',
        'rt',
        'rw',
        'kode_pos',
        'telepon',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'pronvisi',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class, 'form_id', 'id');
    }
}
