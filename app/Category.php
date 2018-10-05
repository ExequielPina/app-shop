<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // $category->products (Relación entre categoría y  producto)
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
