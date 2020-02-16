<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mssql;
use App\User;
use Faker\Generator as Faker;

$factory->define(Mssql::class, function (Faker $faker) {
    return factory(User::class)->raw();
});
