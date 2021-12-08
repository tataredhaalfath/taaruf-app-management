<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserQuestion extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'use_id',
        'pertanyaan_1',
        'pertanyaan_2',
        'pertanyaan_3',
    ];

    protected $hidden = [];
}
