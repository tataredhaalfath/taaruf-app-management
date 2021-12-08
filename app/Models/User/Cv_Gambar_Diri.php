<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv_Gambar_Diri extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cv_id',
        'moto',
        'target_hidup',
        'kegiatan_wl',
        'hal_disukai',
        'sisi_negatif',
        'merokok',
    ];

    protected $hidden = [];

    protected $table = 'cv_profile';

    public function Cv()
    {
        return $this->belongsTo(Cv::class, 'cv_id', 'id');
    }
}
