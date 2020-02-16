<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mysql;
use App\Postgresql;
use Faker\Generator as Faker;

$factory->define(Mysql::class, function (Faker $faker) {
    return factory(Postgresql::class)->raw();
});
