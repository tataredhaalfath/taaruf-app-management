<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quotes extends Model
{
    use SoftDeletes;

    protected $fillable =
    [
        'judul',
        'image',
    ];

    protected $hidden = [];

    protected $taaruf = 'quotes';
}
