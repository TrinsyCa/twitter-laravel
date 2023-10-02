<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;

class Users extends Controller
{
    function create_page()
    {
        return view("create");
    }
    function login_page()
    {
        return view("login");
    }

    public function create_acc(Request $request)
    {
        $username = $request->username;
        $name_surname = $request->name_surname;
        $password = $request->password;

        UserModel::create([
            "username" => $username,
            "name_surname" => $name_surname,
            "password" => $password,
        ]);

        //Done
        header("Refresh:0; url=/");
    }
}
