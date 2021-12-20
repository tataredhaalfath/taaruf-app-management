<?php

namespace App\Models\Counselor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendampingan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'counselor',
        'taaruf_id',
        'user1',
        'user2',
    ];

    protected $hidden = [];

    protected $table = 'pendampingan';
}
