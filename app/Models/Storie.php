<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Storie extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'rating',
        'stories',
    ];

    protected $hidden = [];
}
