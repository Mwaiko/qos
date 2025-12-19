<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug', // Add this
        'description',
        'health_benefits',
        'price',
        'unit',
        'is_organic',
        'status',
        'featured_image',
    ];
    public function bundles()
    {
        return $this->belongsToMany(ProductBundle::class, 'bundle_items')
                    ->withPivot('quantity');
    }

}
