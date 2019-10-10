<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'surname', 'rol_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function experience()
    {
        return $this->hasMany('App\Experience');
    }

    public function education()
    {
        return $this->hasMany('App\Education');
    }

    public function volunteer()
    {
        return $this->hasMany('App\Volunteer');
    }

    public function technicalSkill()
    {
        return $this->hasMany('App\TechnicalSkill');
    }

    public function softSkill()
    {
        return $this->hasMany('App\SoftSkill');
    }

    public function language()
    {
        return $this->hasMany('App\Language');
    }

}
