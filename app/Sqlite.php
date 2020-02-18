<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sqlite extends Model
{
    protected $connection = 'sqlite';

    protected $fillable = ['name', 'email', 'password'];
}
