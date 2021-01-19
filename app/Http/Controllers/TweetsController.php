<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class TweetsController extends Controller
{
	public function index()
    {
     
        return view('tweets.index',[
            'user'=>auth()->user(),
            'tweets'=>auth()->user()->timeline(),
        ]);
    }
    // public function apiIndex(){
    //     return response()->json(Tweet::all());
    // }
    public function store (){
    	$validated =request()->validate(['body'=>'required|max:255']);
    	$tweet = Tweet::create([
    		'user_id' => auth()->id(),
    		'body' => $validated['body']
        ]);
        // return response()->json($tweet);
    	return redirect('/tweets');
    }
}
