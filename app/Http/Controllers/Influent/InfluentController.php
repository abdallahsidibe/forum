<?php

namespace App\Http\Controllers\Influent;

use App\User;
use App\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfluentController extends Controller
{
    public function index(User $user)
    {
        $user = User::find($user);
        $publications = Publication::all();
        
        return view('influent.dashboard',[
            'user' => $user,
            'publications' => $publications,
            
        ]);
    }
}
