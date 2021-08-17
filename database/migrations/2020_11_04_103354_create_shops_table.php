<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('ShopID');
            $table->string('shop_name');
            $table->string('owner_name');
            $table->string('owner_NIC');
            $table->float('lat',16,14)->nullable();
            $table->float('lng',16,14)->nullable();
            $table->string('image')->nullable();
            $table->string('address_no')->nullable();
            $table->string('suburb')->nullable();
            $table->string('city')->nullable();
            $table->string('district')->nullable();
            $table->string('source')->nullable();
            $table->string('status')->nullable();
            $table->integer('telephone_numbers');
            $table->date('registered_date')->nullable();
            $table->integer('due_dates')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('userID')->on('users');
            $table->unsignedBigInteger('RouteID')->nullable();
            $table->foreign('RouteID')->references('RouteID')->on('routes');
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
        Schema::dropIfExists('shops');
    }
}
