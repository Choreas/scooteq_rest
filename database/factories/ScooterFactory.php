<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Scooter;
use Faker\Generator as Faker;

$factory->define(Scooter::class, function (Faker $faker) {
    return [
        'Brand' => $faker->word,
        'Model' => $faker->word,
        'BatteryId' => \App\Battery::all()->random()->id,
        'SeatId' => \App\Seat::all()->random()->id,
        'SpeedId' => \App\Speed::all()->random()->id,
        'YearBuilt' => random_int(1960, 2020),
    ];
});
