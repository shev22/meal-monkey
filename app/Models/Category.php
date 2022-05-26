<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    
    protected $table = 'monkey-category';
    protected $filliable = [

        'title',
        'image_name',
        'featured',
        'active',
    ];

}
