<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mariadb extends Model
{
    protected $connection = 'maria';

    protected $fillable = ['name', 'email', 'password'];
}
