<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'sku', 'price', 'buying_price', 'stock', 'category_id', 'sub_category_id', 'unit_id'];
}
