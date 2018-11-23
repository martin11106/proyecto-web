<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
use App\User;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function login(){
        $credentials = $this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if(Auth::attempt($credentials)){            

            return redirect('/home');
        }
        else{
            return back()
            ->withErrors(['email' => trans('auth.failed')])
            ->withInput(request(['email']));
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/login');
    }
}
