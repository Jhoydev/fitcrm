<?php

use Faker\Generator as Faker;

$factory->define(App\Club::class, function (Faker $faker) {
    return [
        'name' => $faker->safeColorName,
        'address' => $faker->streetAddress,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'mobile' => $faker->phoneNumber,
        'web' => $faker->url
    ];
});
