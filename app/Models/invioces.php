<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invvioces extends Model
{
    protected $fillable = [
        'costumer_id',
        'products_id',
        'price',
        'qty',
        'total',
    ];
}
