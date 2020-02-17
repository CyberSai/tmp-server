<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Mongodb extends Model
{
    protected $primaryKey = 'id';

    protected $connection = 'mongodb';

    protected $fillable = ['name', 'email', 'password'];
}
