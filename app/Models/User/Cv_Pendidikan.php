<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv_Pendidikan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cv_id',
        'sma',
        'jurusan_sma',
        'univ',
        'jurusan_univ',
    ];

    protected $hidden = [];

    protected $table = 'cv_pendidikan';

    public function Cv()
    {
        return $this->belongsTo(Cv::class, 'cv_id', 'id');
    }
}
