<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name',100);
            $table->string('phone',15);
            $table->text('address');

            $table->string('product_id');
            $table->string('product_name');
            $table->string('product_price');
            $table->text('color')->nullable();
            //$table->text('size')->nullable();
            $table->string('status');
            $table->bigInteger('total_order')->default(0);
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
        Schema::dropIfExists('product_orders');
    }
}
