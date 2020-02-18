<?php

namespace App;

use Illuminate\Database\Eloquent\JsonEncodingException;
use Jenssegers\Mongodb\Eloquent\Model;

class Mongodb extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = ['name', 'email', 'password'];
}
