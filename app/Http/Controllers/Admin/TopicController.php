<?php

namespace App\Http\Controllers\Admin;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicController extends Controller
{
    /**Fonction index */
    public function topic()
    {
        $topics = Topic::all();
        return view('admin.topic')->with('topics', $topics);             
    }

    public function topicedit(Request $request, $id)
    {
        $topics = Topic::findOrFail($id);
        return view('admin.topic-edit')->with('topics', $topics);

    }

    public function topicupdate(Request $request, $id)
    {
        $topics = Topic::find($id);
        $topics->isvalidated = $request->input('isvalidated');
        $topics->update();

       return redirect('/view-topic')->with('status', 'Your data is updated');
       // return redirect()->back()->with('status', 'Your data is updated');

    }
}
