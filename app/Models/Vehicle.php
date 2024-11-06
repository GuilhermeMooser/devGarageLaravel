<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

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
