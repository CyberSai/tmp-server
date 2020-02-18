<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postgresql;
use App\Sqlite;
use Faker\Generator as Faker;

$factory->define(Sqlite::class, function (Faker $faker) {
    return factory(Postgresql::class)->raw();
});
