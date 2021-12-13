<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taaruf extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id_1',
        'user_id_2',
        'status',
    ];
    protected $hidden = [];
    protected $table = 'taaruf';
}
