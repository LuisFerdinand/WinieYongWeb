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
        // Search filter
        $query->when($filters['search'] ?? false, function($query, $search) {
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

        // Brand filter - dapat memilih multiple brands
        $query->when($filters['brand'] ?? false, function($query, $brands) {
            if (!is_array($brands)) {
                $brands = [$brands];
            }
            return $query->whereHas('brand', function($query) use ($brands) {
                $query->whereIn('brand_slug', $brands);
            });
        });

        // Category filter - dapat memilih multiple categories
        $query->when($filters['category'] ?? false, function($query, $categories) {
            if (!is_array($categories)) {
                $categories = [$categories];
            }
            return $query->whereHas('category', function($query) use ($categories) {
                $query->whereIn('category_slug', $categories);
            });
        });

        return $query;
    }
    public function scopeSort($query, $sortBy, $direction = 'asc') {
        switch ($sortBy) {
            case 'name_asc':
                return $query->orderBy('type_name', 'asc');
            case 'name_desc':
                return $query->orderBy('type_name', 'desc');
            case 'weight_asc':
                return $query->orderBy('type_operating_weight', 'asc');
            case 'weight_desc':
                return $query->orderBy('type_operating_weight', 'desc');
            case 'power_asc':
                return $query->orderBy('type_engine_power', 'asc');
            case 'power_desc':
                return $query->orderBy('type_engine_power', 'desc');
            case 'fuel_asc':
                return $query->orderBy('type_fuel_capacity', 'asc');
            case 'fuel_desc':
                return $query->orderBy('type_fuel_capacity', 'desc');
            case 'speed_asc':
                return $query->orderBy('type_max_speed', 'asc');
            case 'speed_desc':
                return $query->orderBy('type_max_speed', 'desc');
            case 'updated_asc':
                return $query->orderBy('updated_at', 'asc');
            case 'updated_desc':
                return $query->orderBy('updated_at', 'desc');
            default:
                return $query;
        }
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
