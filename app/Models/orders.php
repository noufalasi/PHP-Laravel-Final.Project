<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = [
        'prodcuts_id',
        'costumer_id',
        'price',
        'status',
        
        
    ];
}
