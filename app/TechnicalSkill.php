<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechnicalSkill extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
