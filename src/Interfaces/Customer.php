
<?php

namespace ManFai\Shop\Interfaces;

use ManFai\Shop\Models\CartItem;

interface Customer
{
    /**
     * @param Product $product
     * @param bool $force
     *
     * @return Transfer
     *
     * @throws
     */
    public function addCart(Product $product, bool $force = null): CartItem;

    /**
     * @param Product $product
     * @param bool $force
     *
     * @return Transfer
     *
     * @throws
     */
     public function checkout(string $payment = null): Order;


     /**
     * @param Order $order
     * @param string $status
     *
     * @return boolean
     *
     * @throws
     */
    public function completeOrder(Order $order, string $status = 'pending'): boolean;

   
}
