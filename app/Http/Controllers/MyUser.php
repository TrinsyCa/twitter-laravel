<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class MyUser extends Controller
{
    public function userData()
    {
        $userId = session('userId');
        $myUser = DB::table('users')->where('id',$userId)->first();

        $name = $myUser->name;
        $username = $myUser->username;
        $email = $myUser->email;
        $password = $myUser->password;

        Session::put('name',$name);
        Session::put('username',$username);
        Session::put('email',$email);
        Session::put('password',$password);
    }
}
