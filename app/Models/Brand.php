<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $primaryKey = 'brand_id';
    protected $guarded = ['brand_id'];
    public function types(){
        return $this->hasMany(Type::class, 'brand_id', 'brand_id');
    }
    public function scopeFilter($query, array $filters) {
        // Search filter
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('brand_name', 'like', "%{$search}%")
                    ->orWhere('brand_description', 'like', "%{$search}%");
            });
        });
        return $query;
    }
    public function scopeSort($query, $sortBy, $direction = 'asc') {
        switch ($sortBy) {
            case 'name_asc':
                return $query->orderBy('brand_name', 'asc');
            case 'name_desc':
                return $query->orderBy('brand_name', 'desc');
            case 'updated_asc':
                return $query->orderBy('updated_at', 'asc');
            case 'updated_desc':
                return $query->orderBy('updated_at', 'desc');
            case 'rentals_asc':
                return $query->withCount('types')->orderBy('types_count', 'asc');
            case 'rentals_desc':
                return $query->withCount('types')->orderBy('types_count', 'desc');
            default:
                return $query;
        }
    }
    
    public function getRouteKeyName()
    {
        return 'brand_slug';
    }
    public function sluggable(): array
    {
        return [
            'brand_slug' => [
                'source' => 'brand_name'
            ]
        ];
    }
}
