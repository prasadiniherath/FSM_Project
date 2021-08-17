<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('userID');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('NIC');
            $table->string('Address');
            $table->string('Gender');
            $table->date('Date_Of_Birth');
            $table->integer('telephone_numbers');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('branch_name');
            $table->boolean('approvel_state');
            $table->unsignedBigInteger('user_typeID')->nullable();
            $table->foreign('user_typeID')->references('user_typeID')->on('usertypes');
            $table->unsignedBigInteger('vehicle_ID')->nullable();
            $table->foreign('vehicle_ID')->references('vehicle_ID')->on('vehicles');
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
        Schema::dropIfExists('users');
    }
}
