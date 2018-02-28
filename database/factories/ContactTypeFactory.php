<?php

use Faker\Generator as Faker;

$factory->define(App\ContactType::class, function (Faker $faker) {
    return [
        'name' => $faker->safeColorName
    ];
});
