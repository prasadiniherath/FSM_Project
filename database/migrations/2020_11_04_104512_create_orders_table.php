<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('OrderID');
            $table->date('placed_date');
            $table->float('bill_value');
            $table->float('discount')->nullable();
            $table->float('return_total')->nullable();
            $table->float('final_bill')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('userID')->on('users');
            $table->unsignedBigInteger('shop_ID');
            $table->foreign('shop_ID')->references('ShopID')->on('shops');
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
