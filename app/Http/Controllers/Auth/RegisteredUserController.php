<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
<<<<<<< HEAD
            'name' => ['required', 'string', 'max:255'],
=======
            'myname' => ['required', 'string', 'max:255'],
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
<<<<<<< HEAD
            'name' => $request->name,
=======
            'name' => $request->myname,
>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        if($request->session()->regenerate())
        {
            $email = $request->email;
            $user = DB::table('users')->where('email',$email)->first();

            $userId = $user->id;

<<<<<<< HEAD
            Session::put('userId',$userId);
        }
=======

            Session::put('userId',$userId);
        }

>>>>>>> 1a2dc4c29dc69b83864711bea111e384d6f0d513
        return redirect("/");
    }
}
