<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // $product->category (relación entre producto y categoría)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // $product->productImage (relación entre producto e imagen)
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

}
