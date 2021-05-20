<?php

namespace ManFai\Shop\Traits;

use ManFai\Shop\Models\CartItem;

trait HasCart
{
  public function cart_items()
  {
    return $this->hasMany(CartItem::class);
  }
    
  /**
  * @param Product $product
  * @return Transfer
  * @throws
  */
  public function add_cart_item($product, $qty = 1): CartItem
  {
      // dd($this->id);
      if($cart = CartItem::where('itemable_id',$product->id)->first()){
        $cart->quantity += $qty;
        $cart->amount    = $product->price * $cart->quantity;
        $cart->save();
      } else {
        $cart = new CartItem();
        $cart->user_id  = $this->id;
        $cart->itemable_type = get_class($product);
        $cart->itemable_id = $product->id;
        $cart->quantity = $qty;
        $cart->amount   = $product->price * $qty;
        $cart->save();
      }
      return $cart;
  }
    
}
