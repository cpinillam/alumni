<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()
    {
        return $this->hasMany('App\User');
    }

    public static function getRoles()
    {
        return Self::all()->pluck('name', 'id');
    }
    //
}
