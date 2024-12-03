<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Sluggable;
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_name',
        'product_slug',
        'product_description',
        'product_image_url',
        'product_image',
        'product_stock',
        'product_price',
        'product_model_number',
        'product_power_output',
        'product_dimensions',
        'product_fuel_type',
        'product_usage_instructions',
        'product_rating',
        'product_reviews_count',
    ];
    protected $guarded = ['product_id'];

    public function scopeFilter($query, array $filters) {
        // Search filter
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('product_name', 'like', "%{$search}%")
                    ->orWhere('product_description', 'like', "%{$search}%")
                    ->orWhere('product_model_number', 'like', "%{$search}%")
                    ->orWhere('product_usage_instructions', 'like', "%{$search}%");
            });
        });
        return $query;
    }
    public function scopeSort($query, $sortBy, $direction = 'asc') {
        switch ($sortBy) {
            case 'name_asc':
                return $query->orderBy('product_name', 'asc');
            case 'name_desc':
                return $query->orderBy('product_name', 'desc');
            case 'updated_asc':
                return $query->orderBy('updated_at', 'asc');
            case 'updated_desc':
                return $query->orderBy('updated_at', 'desc');
            case 'price_asc':
                return $query->orderBy('product_price', 'asc');
            case 'price_desc':
                return $query->orderBy('product_price', 'desc');
            case 'power_output_asc':
                return $query->orderBy('product_power_output', 'asc');
            case 'power_output_desc':
                return $query->orderBy('product_power_output', 'desc');
            case 'dimensions_asc':
                return $query->orderBy('product_dimensions', 'asc');
            case 'dimensions_desc':
                return $query->orderBy('product_dimensions', 'desc');
            case 'fuel_type_asc':
                return $query->orderBy('product_fuel_type', 'asc');
            case 'fuel_type_desc':
                return $query->orderBy('product_fuel_type', 'desc');
            default:
                return $query;
        }
    }
    public function getRouteKeyName()
    {
        return 'product_slug';
    }
    public function sluggable(): array
    {
        return [
            'product_slug' => [
                'source' => 'product_name'
            ]
        ];
    }
}
