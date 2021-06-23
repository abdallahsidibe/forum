<?php

namespace App\Http\Controllers\Influent;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    public function index()
    {
        $users = User::all();
       
        
        return view('influent.profiles',[
            'users' => $users,
                       
        ]);
    }

    public function show(User $user)
    {     
        return view('influent.influent-profile', compact('user'));
    }
}
