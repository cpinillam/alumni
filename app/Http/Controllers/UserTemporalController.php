<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserTemporalController extends Controller
{
    public function beAdmin()
    {
        
        $user = new User;
        $user->setAdmin();
        $isUser = $user->admin;
        @dd($isUser);
        return redirect('toContoller',['user'=>$isUser]);
    }
    
    public function dontBeAdmin()
    {
        $user = new User;
        $user->notAdmin();
        $isUser = $user->admin;
        @dd($isUser);
        return redirect('joboffers');
        
    }

   

}
