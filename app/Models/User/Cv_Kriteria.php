<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv_Kriteria extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cv_id',
        'tinggi',
        'suku',
        'usia',
        'pekerjaan',
        'tambahan'
    ];

    protected $hidden = [];

    protected $table = 'cv_kriteria';

    public function Cv()
    {
        return $this->belongsTo(Cv::class, 'cv_id', 'id');
    }
}
