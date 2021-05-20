<?php

namespace ManFai\Shop\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSku extends Model
{
     /** @var array */
     protected $guarded = [];

     public function getTable() : string
     {
         return config('laravel-eshop.table', 'product_skus'); 
     }
 

}
