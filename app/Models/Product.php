<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image_url',
        'stock',
        'price',
        'model_number',
        'power_output',
        'dimensions',
        'fuel_type',
        'usage_instructions',
        'rating',
        'reviews_count',
    ];
}
