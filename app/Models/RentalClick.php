<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalClick extends Model
{
    use HasFactory;

    protected $fillable = [
        'rental_id',
        'rental_name',
        'click_count',
    ];

    /**
     * Get the rental that owns the rental click.
     */
    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}
