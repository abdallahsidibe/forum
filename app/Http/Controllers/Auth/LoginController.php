<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    protected function redirectTo()
    {
        //Admin Login
        if (Auth::user()->usertype == 'admin') {
            return 'dashboard';
        } else {
            return 'accueil';
        }


        //Influent Login
        /*if(Auth::user()->usertype == 'influent')
        {
            return 'influent';
        }
        //Normal User Login
        if(Auth::user()->usertype == 'NULL')
        {
           // return 'home';
           return 'influent';
        }*/
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
