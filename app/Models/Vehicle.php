<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'name',
        'mark',
        'model',
        'year',
        'characteristics',
      ];
      
    const TYPE_CAR = 'CAR';
    const TYPE_MOTORCYCLE = 'MOTORCYCLE';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
