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
    public function apiIndex(){
        return response()->json(Tweet::all());
    }
    public function apiStore(){
        
        $validated = request()->validate([
            'body'=>'required|max:255',
        ]);
        $tweet = Tweet::create([
            'body'=>$validated['body'],
            'user_id'=>1,
        ]);
        return response()->json($tweet);
    }
    public function store (Request $request){
    	$validated =request()->validate(['body'=>'required|max:255','image'=>'image']);
        if(request()->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalName();
            $fileNameToStore = now().$filename;
           $imageUrl= $request->file('image')->store('tweets','public');
        }
        $tweet = new Tweet;
        $tweet ->user_id = auth()->id();
        $tweet->body = $validated['body'];
        if($request->hasFile('image')){
            $tweet->imageUrl = $imageUrl;
        }
        $tweet->save();
    	// $tweet = Tweet::create([
    	// 	'user_id' => auth()->id(),
    	// 	'body' => $validated['body'],
        //     'imageUrl'=>$validated['image']
        // ]);
        // return response()->json($tweet);
        session()->flash('success','Tweet sent');
    	return redirect('/tweets');
    }
    public function delete(Tweet $tweet){
        $tweet->delete();
        session('success', 'Tweet deleted');
        return back();
    }
    public function notifications(){
        auth()->user()->unreadnotifications->markAsRead();
        $notifications = auth()->user()->notifications;
        return view('notifications', compact('notifications'));
    }
}
