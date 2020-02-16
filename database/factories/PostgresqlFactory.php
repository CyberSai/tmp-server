<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postgresql;
use App\User;
use Faker\Generator as Faker;

$factory->define(Postgresql::class, function (Faker $faker) {
    return factory(User::class)->raw();
});
