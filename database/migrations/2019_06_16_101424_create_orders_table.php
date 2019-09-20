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
            $table->Increments('id');
            $table->integer('customer_id');
            $table->text('product_id');
            $table->text('product_name');
            $table->string('product_price');
            $table->string('product_qty');
            $table->string('home_address')->nullable();
            $table->string('delivery_address');
            $table->string('phone_number');
            $table->string('payment_method')->nullable();
            $table->string('status');
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
    }
}
