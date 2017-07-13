<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function dashboard()
    {
        
    }

    public function userActivation($email,$token){

        $user = User::where('email', $email)->first();
        if ($user) {

            if ($user->activation_token == $token) {
                $user->status = \UserStatus::ACTIVE;
                $user->activation_token='';
                $user->save();
              // TODO label for massege activated user
                return redirect('/home');
            }
        }

        return redirect('/home');
    }
}
