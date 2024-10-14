<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = ['brand_id'];
    public function types(){
        return $this->hasMany(Type::class, 'brand_id', 'brand_id');
    }
}
