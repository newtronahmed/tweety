<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Validation\Rule;
class ProfilesController extends Controller
{
    public function show(User $user){
    	$tweets=$user->tweets()->withLikes()->paginate(3);
    	return view('profile.show',compact('user','tweets'));
    }
    public function edit(User $user){
    	// if(auth()->user()->isNot($user)){
    	// 	abort(403);
    	// }
    	$this->authorize('edit',$user);
    	return view('profile.edit',compact('user'));
    }
    public function update(User $user){
    	$validated= request()->validate([
    		'username'=>['required','string','max:255','alpha_dash',Rule::unique('users')->ignore($user)],
    		'name'=>['required','string','max:255',],
    		'password'=>['required','string','min:8','confirmed'],
    		'avatar'=>['image'],
    		'email'=>['required','string',Rule::unique('users')->ignore($user),'email'],
    	]);
    	if(request('avatar')){	
	    	$path =request('avatar')->store('avatars');
	    	$validated['avatar'] = $path;
    	}

    	$user->update($validated);
    	return redirect()->route('profile.show',$user);
    }
}
