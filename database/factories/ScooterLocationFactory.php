<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ScooterLocation;
use Faker\Generator as Faker;

$factory->define(ScooterLocation::class, function (Faker $faker) {
    return [
        'ScooterId' => \App\Scooter::all()->random()->id,
        'LocationId' => \App\Location::all()->random()->id,
        'Pieces' => random_int(1,600),
    ];
});
