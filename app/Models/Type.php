<?php

namespace App\Models;

use App\Models\Category;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;
    use Sluggable;
    protected $primaryKey = 'type_id';
    // protected $fillable = ['type_name', 'brand_id', 'type_slug', 'type_description', 'category_id'];
    protected $guarded = ['type_id'];
    
    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            // Search for type_name, type_description, category, or brand based on the search term
            return $query->where(function($query) use ($search) {
                $query->where('type_name', 'like', "%{$search}%")
                    ->orWhere('type_description', 'like', "%{$search}%")
                    ->orWhereHas('category', function($query) use ($search) {
                        $query->where('category_name', 'like', "%{$search}%");
                    })
                    ->orWhereHas('brand', function($query) use ($search) {
                        $query->where('brand_name', 'like', "%{$search}%");
                    });
            });
        });
        $query->when($filters['brand'] ?? false, function($query, $brand) {
            return $query->whereHas('brand', function($query) use ($brand) {
                $query->where('brand_slug', $brand);
            });
        });
    
        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('category_slug', $category);
            });
        });
    }
    

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id', 'brand_id');
    }
    public function getRouteKeyName()
    {
        return 'type_slug';
    }
    public function sluggable(): array
    {
        return [
            'type_slug' => [
                'source' => 'type_name'
            ]
        ];
    }
    
}
