<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Referent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**Fonction index */
    public function register()
    {
        $users = User::all();
        return view('admin.register')->with('users', $users);       
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
        /* // if($user->usertype == 'influent')
         // {
            Referent::create([
                'biographie' => "Vous devez definir votre biographie",
                'adresse' => "Vous devez definir votre adresse",
                'contact' => "Vous devez definir votre contact",
                'user_id' => $user->id,                
            ]);
          }*/
        return redirect('/role-register')->with('status', 'Enregistrement réussi!');
    }
}
