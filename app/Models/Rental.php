<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'availability_status',
        'available_from',
        'available_to',
        'image_url',
    ];

    // Add these properties to ensure date fields are cast to Carbon instances
    protected $dates = ['available_from', 'available_to'];

    // If you're using Laravel 7 or later, you can also use $casts:
    protected $casts = [
        'available_from' => 'date',
        'available_to' => 'date',
    ];
}
