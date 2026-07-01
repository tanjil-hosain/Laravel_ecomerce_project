<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'sku', 'price', 'buying_price', 'stock', 'category_id', 'sub_category_id', 'unit_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function sub_category(){
        return $this->belongsTo(Sub_category::class);
    }

    public function unit(){
        return $this->belongsTo(Unit_list::class);
    }

}