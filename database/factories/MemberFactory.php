<?php

use Faker\Generator as Faker;

$factory->define(App\Member::class, function (Faker $faker) use ($factory) {
    return [
        'size' => $faker->randomNumber(2),
        'contact_id' => factory(App\Contact::class)->create()->id,
        'category_id' => rand(1,5),
        'club_id' => rand(1,20),
    ];
});
