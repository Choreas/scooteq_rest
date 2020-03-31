<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contract;
use Faker\Generator as Faker;

$factory->define(Contract::class, function (Faker $faker) {
    return [
        'CustomerId' => \App\Customer::all()->random()->id,
        'ScooterId' => \App\Scooter::all()->random()->id,
        'LocationId' => \App\Location::all()->random()->id,
        'Rented' => $faker->dateTimeThisDecade(),
    ];
});
