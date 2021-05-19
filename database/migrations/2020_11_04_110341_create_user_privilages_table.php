<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPrivilagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_privilages', function (Blueprint $table) {
            $table->unsignedBigInteger('Privilage_ID');
            $table->foreign('Privilage_ID')->references('privilageID')->on('privilages');
            $table->unsignedBigInteger('User_Type_ID');
            $table->foreign('User_Type_ID')->references('user_typeID')->on('usertypes');
            $table->primary(['Privilage_ID', 'User_Type_ID']);
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
        Schema::dropIfExists('user_privilages');
    }
}
