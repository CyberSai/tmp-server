<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mysql extends Model
{
    protected $connection = 'mysql';

    protected $fillable = ['name', 'email', 'password'];
}
