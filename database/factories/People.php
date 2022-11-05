<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\people::class, function (Faker $faker) {
    return [
        'fName' => $faker->firstName(),
        'lName' => $faker->lastName,
        'email' => $faker->safeEmail,
        'phone_number' => $faker->phoneNumber,
        'country' => $faker->country(),
        'img' => $faker->imageUrl(),
    ];
});
