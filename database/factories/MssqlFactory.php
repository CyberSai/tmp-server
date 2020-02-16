<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mssql;
use App\Postgresql;
use Faker\Generator as Faker;

$factory->define(Mssql::class, function (Faker $faker) {
    return factory(Postgresql::class)->raw();
});
