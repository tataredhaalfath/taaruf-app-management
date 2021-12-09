<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAnswer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uq_id',
        'user_id',
        'jawaban_1',
        'jawaban_2',
        'jawaban_3',
    ];

    protected $hidden = [];
}
