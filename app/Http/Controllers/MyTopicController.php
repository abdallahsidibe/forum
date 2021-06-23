<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class MyTopicController extends Controller
{
    public function index()
    {
        $topics = Topic::latest()->paginate(10);

        return view('topics.ind', compact('topics'));
    }
}
