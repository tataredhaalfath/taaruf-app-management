<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'slug'
    ];
    protected $hidden = [];
    protected $table = 'cv';

    public function cv_prifle()
    {
        return $this->hasOne(CvProfile::class, 'cv_id', 'id');
    }

    public function cv_gambar_fisik()
    {
        return $this->hasOne(Cv_Gambar_Fisik::class, 'cv_id', 'id');
    }

    public function Cv_Hobi()
    {
        return $this->hasOne(Cv_Hobi::class, 'cv_id', 'id');
    }

    public function Cv_Pendidikan()
    {
        return $this->hasOne(Cv_Pendidikan::class, 'cv_id', 'id');
    }
}
