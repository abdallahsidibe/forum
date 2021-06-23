<?php

namespace App\Http\Controllers\Influent;

use App\Models\Referent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function index()
    {
        return view('influent.my-info');
    }

    public function infoupdate(Request $request)
    {
        $user_id = Auth::user()->id;
        $referent = Referent::findOrFail($user_id);

        $referent->biographie = $request->input('biographie');
        $referent->adresse = $request->input('adresse');
        $referent->contact = $request->input('contact');
        
        $referent->update();
        return redirect()->back()->with('status','Info Updated');
    }

}
