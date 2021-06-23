<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'admin')
                return view('admin.dashboard');
            else return view('influent.dashboard');
        }
        return view('auth.login');
    }
}
