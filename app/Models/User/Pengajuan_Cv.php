<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengajuan_Cv extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'cv_id',
        'question_id',
    ];

    protected $hidden = [];

    protected $table = 'pengajuan_cv';

    public function Cv()
    {
        return $this->belongsTo(Cv::class, 'cv_id', 'id');
    }

    public function UserQuestion()
    {
        return $this->belongsTo(UserQuestion::class, 'question_id', 'id');
    }
}
