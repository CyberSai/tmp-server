<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mariadb extends Model
{
    protected $connection = 'mariadb';

    protected $fillable = ['name', 'email', 'password'];
}
