<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv_Harapan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cv_id',
        'visi',
        'misi',
        'karir',

    ];

    protected $hidden = [];

    protected $table = 'cv_harapan';

    public function Cv()
    {
        return $this->belongsTo(Cv::class, 'cv_id', 'id');
    }
}
