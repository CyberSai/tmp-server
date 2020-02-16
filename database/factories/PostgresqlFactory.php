<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postgresql;
use App\User;
use Faker\Generator as Faker;

$factory->define(Postgresql::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->randomNumber(8)
    ];
});
