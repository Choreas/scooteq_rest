<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScooterLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scooter_locations', function (Blueprint $table) {
            $table->bigInteger('LocationId')->unsigned();
            $table->bigInteger('ScooterId')->unsigned();
            $table->foreign('ScooterId')->references('id')->on('scooters');
            $table->foreign('LocationId')->references('id')->on('locations');
            $table->integer('Pieces');
            $table->timestamps();

            $table->primary(array('LocationId', 'ScooterId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scooter_locations');
    }
}
