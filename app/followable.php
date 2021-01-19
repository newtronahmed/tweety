<?php 
namespace App;
trait Followable 
{
	public function follows(){
        return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
    }
    public function toggleFollow(User $user){
    	return $this->follows()->toggle($user);
    }
    
    public function isfollowing(User $user){
    	return $this->follows()->where('following_user_id', $user->id)->exists();
    }
    
}

 ?>