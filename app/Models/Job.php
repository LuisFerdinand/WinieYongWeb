<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory, Sluggable;

    protected $primaryKey = 'job_id';
    protected $fillable = [
        'job_title',
        'job_slug',
        'job_description',
        'job_department',
        'job_work_type',
        'job_total_positions',
        'job_requirements',
        'job_status',
        'job_image'
    ];
    protected $guarded = ['job_id'];

    public function scopeFilter($query, array $filters) {
        // Search filter
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('job_title', 'like', "%{$search}%")
                    ->orWhere('job_description', 'like', "%{$search}%")
                    ->orWhere('job_department', 'like', "%{$search}%")
                    ->orWhere('job_requirements', 'like', "%{$search}%")
                    ->orWhere('job_work_type', 'like', "%{$search}%")
                    ->orWhere('job_status', 'like', "%{$search}%");
            });
        });
        return $query;
    }
    public function scopeSort($query, $sortBy, $direction = 'asc') {
        switch ($sortBy) {
            case 'name_asc':
                return $query->orderBy('job_title', 'asc');
            case 'name_desc':
                return $query->orderBy('job_title', 'desc');
            case 'updated_asc':
                return $query->orderBy('updated_at', 'asc');
            case 'updated_desc':
                return $query->orderBy('updated_at', 'desc');
            case 'positions_asc':
                return $query->orderBy('job_total_positions', 'asc');
            case 'positions_desc':
                return $query->orderBy('job_total_positions', 'desc');
            default:
                return $query;
        }
    }
    public function getRouteKeyName()
    {
        return 'job_slug';
    }
    public function sluggable(): array
    {
        return [
            'job_slug' => [
                'source' => 'job_title'
            ]
        ];
    }
}
