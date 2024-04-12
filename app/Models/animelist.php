<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animelist extends Model
{
    use HasFactory;

    protected $table = 'anime';

    protected $guarded = [
        'id'
    ];

    public function getRouteKeyName()
    {
         return 'slug';
    }

}
