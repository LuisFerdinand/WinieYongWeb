<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'description', 'image_url', 'stock', 'price', 'category', 'model_number', 'specifications'];
}
