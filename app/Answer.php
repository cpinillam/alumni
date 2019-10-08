<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'body', 'post_id'
    ];

    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function post()
    {
        $this->belongsTo('App\Post');
    }
}
