<?php

namespace App\Http\Controllers;

use App\Models\Pub;
use Illuminate\Http\Request;

class PubController extends Controller
{
    /**
     * Toutes les methodes dans mon controller
     * ne sont accessibles que lorsque
     * je suis connecté
     * sauf index et show
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pubs = Pub::latest()->paginate(10);

       // return view('pub.index', compact('pubs'));
       return view('influent.dashboard', compact('pubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pub.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

       /**Passer l'enger à travers la relation  user() et pubs()*/
        $pub = auth()->user()->pubs()->create($data);

        return redirect()->route('pubs.show', $pub->id)->with('status', 'Enregistrement réussi!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function show(Pub $pub)
    {
        return view('pub.show', compact('pub'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   \App\Models\Pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function edit(Pub $pub)
    {
        /**On authorise l'envoi de cette vue si 
         * le Pub appartient à l'user connecté
         */
        $this->authorize('update', $pub);

        return view('pub.edit', compact('pub'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pub  $pub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pub $pub)
    {
        $this->authorize('update', $pub);

        $data = $request->validate([
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        $pub->update($data);

        return redirect()->route('pubs.show', $pub->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pub $pub)
    {
        $this->authorize('delete', $pub);

        Pub::destroy($pub->id);

        return redirect('/pub');
    }
}
