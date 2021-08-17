<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopUnproductivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_unproductives', function (Blueprint $table) {
            $table->bigIncrements('unproductiveID');
            $table->string('unproductive_reason');
            $table->date('unproductive_date');
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
        Schema::dropIfExists('shop_unproductives');
    }
}
