<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products_Details extends Model
{
    protected $fillable = [
        'id_prodcuts',
        'price',
        'qty',
        'image',
        'color',
        
    ];
}
