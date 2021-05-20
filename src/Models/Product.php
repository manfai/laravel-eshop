<?php

namespace ManFai\Shop\Models;

use Illuminate\Database\Eloquent\Model;
use ManFai\Shop\Traits\CanPay;

class Product extends Model
{
    use CanPay;

     /** @var array */
     protected $guarded = [];

     public function getTable() : string
     {
         return config('laravel-eshop.table', 'products'); 
     }
 

}
