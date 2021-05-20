<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('no')->unique(); //order no
            $table->foreignId('user_id');
            $table->text('delivery_by')->nullable();
            $table->text('shipping_address')->nullable();
            $table->unsignedInteger('total_items');
            $table->decimal('total_amount', 10, 2);
            $table->boolean('used_discount')->default(false); //檢查有冇用wallet既錢
            $table->decimal('real_amount', 10, 2);
            $table->timestamp('paid_at');
            $table->timestamp('paid_by'); //payment method
            $table->string('payment_status')->default('pending'); //pending -> paid/failed/cancelled
            $table->string('refund_status')->nullable(); //no_request -> requested -> pending -> rejected/refunded
            $table->string('delivery_status')->nullable();
            $table->boolean('closed')->default(false);
            $table->boolean('reviewed')->default(false);
            $table->text('remark')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('order_charges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->string('type'); //pending -> paid/failed/cancelled
            $table->decimal('value', 10, 2);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_charges');
    }
}
