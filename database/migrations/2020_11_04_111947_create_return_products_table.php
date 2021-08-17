<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_products', function (Blueprint $table) {
            $table->unsignedBigInteger('OrderID');
            $table->foreign('OrderID')->references('OrderID')->on('orders');
            $table->unsignedBigInteger('product_ID');
            $table->foreign('product_ID')->references('productID')->on('products');
            $table->integer('quantity_per_product')->nullable();
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
        Schema::dropIfExists('return_products');
    }
}
