<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Part extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'part_name',
        'part_slug',
        'part_description',
        'part_price',
        'part_image_url',
        'part_image',
        'part_category',
        'part_contact',
        'part_location'
    ];

    protected $primaryKey = 'part_id';
    protected $guarded = ['part_id'];
    public function scopeFilter($query, array $filters) {
        // Search filter
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('part_name', 'like', "%{$search}%")
                    ->orWhere('part_description', 'like', "%{$search}%")
                    ->orWhere('part_category', 'like', "%{$search}%")
                    ->orWhere('part_contact', 'like', "%{$search}%")
                    ->orWhere('part_location', 'like', "%{$search}%");
            });
        });
        return $query;
    }
    public function scopeSort($query, $sortBy, $direction = 'asc') {
        switch ($sortBy) {
            case 'name_asc':
                return $query->orderBy('part_name', 'asc');
            case 'name_desc':
                return $query->orderBy('part_name', 'desc');
            case 'updated_asc':
                return $query->orderBy('updated_at', 'asc');
            case 'updated_desc':
                return $query->orderBy('updated_at', 'desc');
            case 'price_asc':
                return $query->orderBy('part_price', 'asc');
            case 'price_desc':
                return $query->orderBy('part_price', 'desc');
            default:
                return $query;
        }
    }
    public function getRouteKeyName()
    {
        return 'part_slug';
    }
    public function sluggable(): array
    {
        return [
            'part_slug' => [
                'source' => 'part_name'
            ]
        ];
    }
}
