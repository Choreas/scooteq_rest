<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Battery;
use Faker\Generator as Faker;

$factory->define(Battery::class, function (Faker $faker) {
    return [
        'Description' => $faker->text(),
    ];
});
