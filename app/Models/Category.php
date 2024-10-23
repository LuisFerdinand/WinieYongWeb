<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';
    protected $guarded = ['category_id'];
    protected $fillable = ['category_name', 'category_slug', 'category_description', 'category_image'];
    public function types(){
        return $this->hasMany(Type::class, 'category_id', 'category_id');
    }
    public function getRouteKeyName()
    {
        return 'category_slug';
    }
    public function sluggable(): array
    {
        return [
            'category_slug' => [
                'source' => 'category_name'
            ]
        ];
    }
}
