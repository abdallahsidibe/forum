<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\Referent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**Fonction index */
    public function dashboard()
    {
        $user  =  DB::table('users')->count();
        $pub   =  DB::table('pubs')->count();
        $topic =  DB::table('topics')->count();

        return view('admin.dashboard', compact('user','pub','topic'));       
    }
   

    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users', $users);

    }

    public function registerupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->isban = $request->input('isban');
         
        if($users->usertype == 'influent')
          {
            Referent::create([
                'biographie' => "Vous devez definir votre biographie",
                'adresse' => "Vous devez definir votre adresse",
                'contact' => "Vous devez definir votre contact",
                'user_id' => $users->id,                
            ]);
          }

        $users->update();

       return redirect('/role-register')->with('status', 'Your data is updated');
       // return redirect()->back()->with('status', 'Your data is updated');

    }

    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status', 'Your data is deleted');
    }
}
