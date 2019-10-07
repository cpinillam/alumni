<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTemporal extends Model
{
    public $admin = false;

    public function setAdmin()
    {
        $this->admin = true;
    }

    public function notAdmin()
    {
        $this->admin = false;
    }

    public function isAdmin()
    {
        return $this->admin;
    }
}
