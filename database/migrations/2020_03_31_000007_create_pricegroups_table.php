<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricegroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricegroups', function (Blueprint $table) {
            $table->bigInteger('BatteryId')->unsigned();
            $table->bigInteger('SpeedId')->unsigned();
            $table->bigInteger('SeatId')->unsigned();
            $table->foreign('BatteryId')->references('id')->on('batteries');
            $table->foreign('SeatId')->references('id')->on('seats');
            $table->foreign('SpeedId')->references('id')->on('speeds');
            $table->decimal('Price');
            $table->timestamps();

            $table->primary(array('BatteryId', 'SpeedId', 'SeatId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pricegroups');
    }
}
