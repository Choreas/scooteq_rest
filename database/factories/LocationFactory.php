<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'CountryCode' => \App\Country::all()->random()->Code,
        'PostalCode' => $faker->postcode,
        'City' => $faker->city,
        'Description' => $faker->text(),
        'Phone' => $faker->firstName,
        'Address' => $faker->streetAddress,
    ];
});
