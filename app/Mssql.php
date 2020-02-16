<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mssql extends Model
{
    protected $connection = 'sqlsrv';

    protected $fillable = ['name', 'email', 'password'];
}
