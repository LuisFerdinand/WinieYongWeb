<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_name',
        'project_description',
        'project_date',
        'project_image',
        'project_client',
        'project_status',
        'project_highlights',
    ];
    protected $dates = ['project_date'];

    protected $casts = [
        'project_date' => 'date',
    ];
}
