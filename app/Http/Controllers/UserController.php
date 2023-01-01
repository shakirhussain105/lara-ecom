<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();
        if (!($user && Hash::check($request->password, $user->password)))
            return 'Invalid Username or Password';
        else {
            $request->session()->put('user', $user);
            return redirect('/product');
        }
    }

    public function username()
    {
        return 'username';
    }
}
