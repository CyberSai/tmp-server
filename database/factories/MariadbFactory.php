<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mariadb;
use App\Postgresql;
use Faker\Generator as Faker;

$factory->define(Mariadb::class, function (Faker $faker) {
    return factory(Postgresql::class)->raw();
});
