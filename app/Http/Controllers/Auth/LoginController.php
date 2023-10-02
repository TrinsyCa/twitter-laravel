<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only("username","password");

        if (Auth::attempt($credentials))
        {
            return "Giriş Yapıldı";
        }

        return "hata";
    }
}
