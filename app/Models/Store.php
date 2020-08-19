<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'store_product', 'store_id', 'product_id');
    }
}
