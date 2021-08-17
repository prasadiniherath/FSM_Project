<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_stock', function (Blueprint $table) {
            $table->bigIncrements('stock_id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('userID')->on('users');
            $table->unsignedBigInteger('product_ID')->nullable();
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
        Schema::dropIfExists('vehicle_stock');
    }
}
