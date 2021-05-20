<?php

namespace ManFai\Shop\Traits;

use ManFai\Shop\Models\CartItem;

trait HasFavouriteList
{
  public function favourite_list()
  {
    return $this->hasMany(FavouriteItem::class);
  }
}
