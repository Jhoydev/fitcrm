<?php

use Faker\Generator as Faker;

$factory->define(App\Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'birthdate' => $faker->date(),
        'email' => $faker->email,
        'password' => bcrypt($faker->randomNumber(6)),
        'phone' => $faker->randomNumber(9),
        'mobile' => $faker->randomNumber(9),
        'country' => $faker->country,
        'province' => $faker->state,
        'city' => $faker->city,
        'instagram' => $faker->imageUrl(),
        'twitter' => $faker->imageUrl(),
        'facebook' => $faker->imageUrl(),
        'avatar' => $faker->imageUrl(800,600,'cats'),
        'user_id' => 1,
        'contact_type_id' => rand(1,2),
    ];
});
