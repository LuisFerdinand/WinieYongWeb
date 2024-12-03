<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'project_name',
        'project_slug',
        'project_description',
        'project_date',
        'project_image',
        'project_client',
        'project_status',
        'project_highlights',
    ];
    protected $primaryKey = 'project_id';
    protected $guarded = ['project_id'];

    protected $dates = ['project_date'];

    protected $casts = [
        'project_date' => 'date',
    ];
public function scopeFilter($query, array $filters) {
        // Search filter
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('project_name', 'like', "%{$search}%")
                    ->orWhere('project_description', 'like', "%{$search}%")
                    ->orWhere('project_client', 'like', "%{$search}%")
                    ->orWhere('project_highlights', 'like', "%{$search}%");
            });
        });
        return $query;
    }
    public function scopeSort($query, $sortBy, $direction = 'asc') {
        switch ($sortBy) {
            case 'name_asc':
                return $query->orderBy('project_name', 'asc');
            case 'name_desc':
                return $query->orderBy('project_name', 'desc');
            case 'updated_asc':
                return $query->orderBy('updated_at', 'asc');
            case 'updated_desc':
                return $query->orderBy('updated_at', 'desc');
            case 'date_asc':
                return $query->orderBy('project_date', 'asc');
            case 'date_desc':
                return $query->orderBy('project_date', 'desc');
            default:
                return $query;
        }
    }
    public function getRouteKeyName()
    {
        return 'project_slug';
    }
    public function sluggable(): array
    {
        return [
            'project_slug' => [
                'source' => 'project_name'
            ]
        ];
    }
}
