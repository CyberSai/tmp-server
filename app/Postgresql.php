<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postgresql extends Model
{
    protected $fillable = ['name', 'email', 'password'];
}
