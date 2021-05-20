<?php

namespace ManFai\Shop\Traits;

use ManFai\Shop\Models\CartItem;

trait CanPay
{
 
  /**
    * @param Product $product
    * @return Transfer
    * @throws
    */
    public function add_cart_item(Product $product): CartItem
    {
        return app(Cart::class)->addItem($product);
    }
    
}
