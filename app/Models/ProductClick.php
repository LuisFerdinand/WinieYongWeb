<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductClick extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'product_name',
        'clicked_at',
    ];

    /**
     * Get the product associated with the click.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
