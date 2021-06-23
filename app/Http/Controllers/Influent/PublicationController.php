<?php

namespace App\Http\Controllers\Influent;

use App\Publication;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicationController extends Controller
{
    //Il faut user soit connecté
    public function __construct()
    {
        $this->middleware('auth');
    }


    //Fonction index 
    public function index()
    {
        $publications = Publication::all();
       return view('influent.dashboard', compact('publications'));       
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'contenu' => 'required|min:10',
            
        ]);

        $publication = auth()->user()->publications()->create([
            'title' => request('title'),
            'contenu' => request('contenu')
        ]);

        return redirect('/influent-dashboard')->with('status', 'Enregistrement réussi!');
    }
}
