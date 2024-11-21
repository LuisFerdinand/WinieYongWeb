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
    public function scopeFilter($query, array $filters) {
        // Search filter
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('category_name', 'like', "%{$search}%")
                    ->orWhere('category_description', 'like', "%{$search}%");
            });
        });
        return $query;
    }
    public function scopeSort($query, $sortBy, $direction = 'asc') {
        switch ($sortBy) {
            case 'name_asc':
                return $query->orderBy('category_name', 'asc');
            case 'name_desc':
                return $query->orderBy('category_name', 'desc');
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
