<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'CountryCode' => \App\Country::all()->random()->Code,
        'PostalCode' => $faker->postcode,
        'City' => $faker->city,
        'Name' => $faker->lastName,
        'FirstName' => $faker->firstName,
        'Address' => $faker->streetAddress,
    ];
});
