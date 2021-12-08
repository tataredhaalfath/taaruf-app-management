<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv_Gambar_Fisik extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cv_id',
        'bentuk_fisik',
        'warna_kulit',
        'tinggi',
        'berat',
        'riwayat_penyakit',
        'golongan_darah',
        'cacat_fisik',
        'tipe_rambut',
        'warna_mata',
        'tanda_lahir',
    ];

    protected $hidden = [];

    protected $table = 'cv_gambar_fisik';

    public function cv_profile()
    {
        return $this->belongsTo(Cv::class, 'cv_id', 'id');
    }
}
