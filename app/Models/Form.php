<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Form extends Model
{
    use HasFactory;

    protected $table = 'form';

    public $incrementing = false;
    protected $primaryKey = 'id';

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
        'user_id',
        'petugas_id',
        'type',
        'status',
    ];



    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }

    // Relationship with DataSuami
    public function dataSuami()
    {
        return $this->hasOne(DataSuami::class, 'form_id');
    }

    // Relationship with DataIstri
    public function dataIstri()
    {
        return $this->hasOne(DataIstri::class, 'form_id');
    }

    // Relationship with DataSaksi (one-to-many)
    public function dataSaksi()
    {
        return $this->hasMany(DataSaksi::class, 'form_id');
    }

    // Relationship with DataIstri
    public function dataAyahDariIstri()
    {
        return $this->hasOne(DataAyahDariIstri::class, 'form_id');
    }

    public function dataAyahDariSuami()
    {
        return $this->hasOne(DataAyahDariSuami::class, 'form_id');
    }

    public function dataIbuDariIstri()
    {
        return $this->hasOne(DataIbuDariIstri::class, 'form_id');
    }

    public function dataIbuDariSuami()
    {
        return $this->hasOne(DataIbuDariSuami::class, 'form_id');
    }

}
