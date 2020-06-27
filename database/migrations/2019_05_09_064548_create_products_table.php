<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('product_name');
            $table->string('product_title');
            $table->string('sub_category_id');
            $table->string('type')->nullable();
            $table->string('slug');
            $table->string('product_price');
            $table->string('discount')->nullable();
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->integer('product_quantity');
            $table->string('sku');
            $table->string('stock');
            $table->text('multiple');
            $table->text('description');
            $table->text('color')->nullable();
            $table->text('size')->nullable();
            $table->text('video_link')->nullable();
            $table->string('warranty')->nullable();
            $table->tinyInteger('status');
            $table->bigInteger('total_order')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
}
