<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';
    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany('Post','uid');
    }
}
