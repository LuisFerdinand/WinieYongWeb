<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image_url',
        'model_number',
        'power_output',
        'dimensions',
        'fuel_type',
        'usage_instructions',
    ];
=======


    protected $fillable = ['name', 'description', 'image_url', 'stock', 'price', 'category', 'model_number', 'specifications'];
>>>>>>> origin/Rental
}
