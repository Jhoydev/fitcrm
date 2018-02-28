<?php

use Faker\Generator as Faker;

$factory->define(App\Description::class, function (Faker $faker) {
    return [
        'text' => $faker->randomHtml(2,3),
        'type' => $faker->randomElement(['championships','academy']),
        'year' => $faker->year,
        'member_id' => rand(1,50),
    ];
});
