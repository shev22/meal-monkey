<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    
    protected $table = 'monkey-food';
    protected $filliable = [

        'title',
        'description',
        'price',
        'image_name',
        'featured',
        'active',
    ];

}
