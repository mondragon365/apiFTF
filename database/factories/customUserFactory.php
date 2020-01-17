<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\customUser;
use Faker\Generator as Faker;

$factory->define(customUser::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique->companyEmail,
        'role' => $faker->numberBetween($min = 1, $max = 3)         
    ];
});
