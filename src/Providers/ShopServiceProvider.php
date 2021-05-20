<?php

namespace ManFai\Shop\Providers;

use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
    public function boot()
    {
      $this->loadRoutesFrom(__DIR__.'/../../routes/shop.php');
      $this->loadViewsFrom(__DIR__.'/../../resources/views', 'shop');
      $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}

