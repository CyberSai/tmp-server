<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mongodb;
use App\User;
use Faker\Generator as Faker;

$factory->define(Mongodb::class, function (Faker $faker) {
    return factory(User::class)->raw();
});
