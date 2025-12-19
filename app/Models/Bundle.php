<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    public function products() {
        return $this->belongsToMany(Product::class, 'bundle_items');
    }
}
