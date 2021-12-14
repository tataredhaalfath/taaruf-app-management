<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'image',
        'telpon',
        'gender',
        'kota',
        'kecamatan',
        'kelurahan',
        'alamat',
        'umur',
        'pendidikan_ahir',
        'tagline',
    ];
    protected $hidden = [];
    protected $table = 'user_profile';
}
