<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }
    }

    public function register(Request $request)
    {
        $user = new User();
        $user->first_name = $request->firstName;
        $user->last_name = $request->lastName;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'user';
        $user->save();

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->save();

        return redirect()->back();
    }
}
