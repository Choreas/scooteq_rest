<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scooters', function (Blueprint $table) {
            $table->id();
            $table->string('Brand');
            $table->string('Model');
            $table->bigInteger('BatteryId')->unsigned();
            $table->bigInteger('SpeedId')->unsigned();
            $table->bigInteger('SeatId')->unsigned();
            $table->foreign('BatteryId')->references('id')->on('batteries');
            $table->foreign('SeatId')->references('id')->on('seats');
            $table->foreign('SpeedId')->references('id')->on('speeds');
            $table->integer('YearBuilt');
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
        Schema::dropIfExists('scooters');
    }
}
