<?php 
namespace App;
trait Likeable{
	public function like($user=null,$like=true){
    	return $this->likes()->updateOrCreate([
    		'user_id'=> $user? $user->id : auth()->id(),
    	],[
    		'liked'=>$like,
    	]);
    }
    public function scopeWithLikes( $query){
    	$query->leftJoinSub(
    		'SELECT tweet_id , sum(liked) likes , sum(!liked) dislikes from likes  group by tweet_id',
    		'likes',
    		'likes.tweet_id','tweets.id'
    	);
    }
    public function dislike($user=null){
    	return $this->like($user,false);
    }
    public function isLikedBy(User $user){
    	return (bool) $user->likes->where('tweet_id',$this->id)->where('liked',true)->count();
    }
    public function isDisLikedBy(User $user){
    	return (bool) $user->likes->where('tweet_id', $this->id)->where('liked',false)->count();
    }


    public function likes(){
    	return $this->hasMany('App\Like');
    }
}


 ?>