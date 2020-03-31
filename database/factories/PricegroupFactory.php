<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pricegroup;
use Faker\Generator as Faker;

$factory->define(Pricegroup::class, function (Faker $faker) {
    return [
        'BatteryId' => \App\Battery::all()->random()->id,
        'SpeedId' => \App\Speed::all()->random()->id,
        'SeatId' => \App\Seat::all()->random()->id,
        'Price' => $faker->dateTimeThisDecade(),
    ];
});
