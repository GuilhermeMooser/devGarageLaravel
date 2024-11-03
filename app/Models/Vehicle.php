<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'year',
        'model',
        'mark',
        'photo',
        'characteristics',
        'type',
        'price',
        'user_id',
    ];

    const TYPE_CAR = 'CAR';
    const TYPE_MOTORCYCLE = 'MOTORCYCLE';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
