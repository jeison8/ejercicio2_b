<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'cards_id','origin_station','final_station','price'
    ];
}
