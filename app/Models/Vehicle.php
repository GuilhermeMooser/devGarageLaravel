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
}
