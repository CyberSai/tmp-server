<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mariadb;
use App\User;
use Faker\Generator as Faker;

$factory->define(Mariadb::class, function (Faker $faker) {
    return factory(User::class)->raw();
});
