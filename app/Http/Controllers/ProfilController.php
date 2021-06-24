<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfilController extends Controller
{
    public function index()
    {
        return view('frontend.my-profile');
    }
   
   
    public function profilupdate(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);

        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        if ($request->hasfile('avatar'))
         {
            $destination = 'uploads/profile/'.$user->avatar;
            //$destination = 'storage/users-avatar/'.$user->avatar;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('uploads/profile/', $filename);
            $file->move('storage/users-avatar/', $filename);
            $user->avatar = $filename;
        }

        $user->update();
        return redirect()->back()->with('status','Profile Updated');

    }    
}
