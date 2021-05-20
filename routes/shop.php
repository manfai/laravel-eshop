<?php

use Illuminate\Support\Facades\Route;
use ManFai\Shop\Models\Product;
// Route::middleware('web')->group(function () {
//     Route::middleware('guest')->group(function () {
//         Route::get('cart', function () {
//             dd('Cart Route is Loading');
//         });
//     });
// });
Route::middleware('web')->group(function () {
    // Route::middleware('auth')->group(function () {
        Route::get('shopping-cart', function () {
            // Product::create([
            //     'code'=>'12321',
            //     'title'=>'asdasd',
            //     'description'=>'asdasd',
            //     'image'=>'',
            //     'price'=>123,
            //     'on_sale'=>true,
            // ]);
            dd(Auth::user()->add_cart_item(Product::find(1)));
            dd('Cart Route is Loading');
        });
        Route::get('favorite-list', function () {
            dd('Favorite Route is Loading');
        });
        Route::get('orders', function () {
            dd('Order Route is Loading');
        });
    // });
});