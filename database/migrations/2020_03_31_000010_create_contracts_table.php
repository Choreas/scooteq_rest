<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('CustomerId')->unsigned();
            $table->bigInteger('ScooterId')->unsigned();
            $table->bigInteger('LocationId')->unsigned();
            $table->foreign('CustomerId')->references('id')->on('customers');
            $table->foreign('ScooterId')->references('id')->on('scooters');
            $table->foreign('LocationId')->references('id')->on('locations');
            $table->dateTime('Rented');
            $table->dateTime('Returned')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
