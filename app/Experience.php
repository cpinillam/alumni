<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'title', 'phone', 'webPage', 'github', 'codepen', 'linkedIn', 'location'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    //
}
