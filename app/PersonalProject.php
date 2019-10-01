<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PersonalProject extends Model
{
    public function getAllProjectsThatAreValidateAndPublic(){
        $sql=DB::table('personal_projects')
                ->select(DB::raw('*'))
                ->where('validate','=',1)
                ->where('public','=',1)
                ->get();

        return $sql;
    }
}
