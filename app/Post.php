<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class Post extends Model
{
    use softDeletes;

    protected $primaryKey = 'post_id';
    protected $fillable = ['title', 'body'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function Answers()
    {
        return $this->hasMany('App\Answer');
    }
}
