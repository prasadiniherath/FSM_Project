<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteShedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_shedules', function (Blueprint $table) {
            $table->unsignedBigInteger('RouteID')->nullable();
            $table->foreign('RouteID')->references('RouteID')->on('routes');
            $table->date('date_of_Shedule')->nullable();
//            $table->primary(['RouteID', 'SheduleID']);
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
        Schema::dropIfExists('route_shedules');
    }
}
