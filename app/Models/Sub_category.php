<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    protected $fillable = ['name'];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
