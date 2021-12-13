<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaarufTransaction extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'taaruf_id',
        'user_id',
        'status',
        'alasan',
    ];

    protected $hidden = [];
    public function taaruf()
    {
        return $this->belongsTo(Taaruf::class, 'taaruf_id', 'id');
    }
}
