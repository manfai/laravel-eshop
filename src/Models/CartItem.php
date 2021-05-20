<?php

namespace ManFai\Shop\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
     /** @var array */
     protected $guarded = [];

     public function user() : MorphTo
     {
         return $this->morphTo('user');
     }
 
     public function item() : MorphTo
     {
         return $this->morphTo('itemable');
     }
 
     public function getTable() : string
     {
         return config('laravel-eshop.table', 'user_cart_items'); 
     }
 

}
