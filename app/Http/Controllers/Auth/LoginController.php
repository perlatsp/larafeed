<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        if (Auth::attempt([
            'username' => $request['username'],
            'password' => $request['password']])) {
            return response()
                ->json([
                    'user'=>Auth::user(),
                    'redirect'=>route('admin')
                ]);
        }
        else{
            return 'failed to login';
        }
    }



    public function logout(Request $request)
    {

        if(Auth::user()){
            Auth::logout();
                return response()->json([
                    'auth' => auth()->check(),
                    'user' => Auth::user(),
                    'redirect'=>'/login'
                ]);
        }
        else
        {
            dd('No user is logged in now!!');
        }



    }


    public function showLogin()
    {
        return view('auth.login');
    }

}
