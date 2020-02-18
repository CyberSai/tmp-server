<?php

namespace App;

use Illuminate\Database\Eloquent\JsonEncodingException;
use Jenssegers\Mongodb\Eloquent\Model;

class Mongodb extends Model
{
    protected $connection = 'mongodb';

    protected $fillable = ['name', 'email', 'password'];

    public function toJson($options = 0)
    {
        $json = json_encode($this->toArray(), $options);

        if (JSON_ERROR_NONE !== json_last_error()) {
            throw JsonEncodingException::forModel($this, json_last_error_msg());
        }

        return $json;
    }

    public function toArray()
    {
        return array_merge(parent::toArray(),[
            'id' => $this->_id
        ]);
    }
}
