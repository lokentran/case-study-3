<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $fillable = ['img', 'name','price', 'description', 'category_id'];
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
    
    public function stores()
    {
        return $this->belongsToMany('App\Models\Store', 'store_product', 'product_id', 'store_id');
    }

}
