<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mongodb;
use App\Postgresql;
use Faker\Generator as Faker;

$factory->define(Mongodb::class, function (Faker $faker) {
    return factory(Postgresql::class)->raw();
});
