<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kajian extends Model
{
    use SoftDeletes;

    protected $fillable =
    [
        'judul',
        'url',
    ];
    protected $hidden = [];

    protected $table = 'kajian';
}
