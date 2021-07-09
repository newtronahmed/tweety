<?php 
namespace App;

use App\Notifications\FollowNotification;
use App\Notifications\LikeNotification;

trait Followable 
{
	public function follows(){
        return $this->belongsToMany(User::class,'follows','user_id','following_user_id');
    }
    public function toggleFollow(User $user){
        if($this->isfollowing($user)){
            $user->notify( new FollowNotification($this,false));
        }else{
            $user->notify(new FollowNotification($this,true) );
        }
    	return $this->follows()->toggle($user);
    }
    
    public function isfollowing(User $user){
    	return $this->follows()->where('following_user_id', $user->id)->exists();
    }
    
}

?>