<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $first_name = $faker->firstName;
    $last_name  = $faker->lastName;
    $full_name  = $first_name . ' ' . $last_name;

    return [
        'name' => $full_name,
        'email' => str_slug(strtolower($full_name)) . '@test.com',
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
