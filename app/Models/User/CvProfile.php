<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CvProfile extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'cv_id', 'image', 'nama', 'alamat', 'tgl_lahir', 'umur', 'agama', 'manhaj', 'status', 'menikah', 'suku'
    ];

    protected $hidden = [];

    protected $table = 'cv_profile';

    public function cv()
    {
        return $this->belongsTo(Cv::class, 'cv_id', 'id');
    }
}
