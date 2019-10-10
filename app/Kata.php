<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kata extends Model
{
    protected $fillable = ['name','description','username',"repository"];
}
