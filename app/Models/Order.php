<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'monkey-order';
    protected $filliable = [

        'title',
        'food',
        'price',
        'qty',
        'total',
        'status',
        'customer_name',
        'customer_contact',
        'customer_email',
        'customer_address',
        
    ];

}
