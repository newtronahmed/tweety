<form method="POST" action='/profile/follow/{{$user->username}}'>
	@csrf
<button type="submit" class="bg-blue-400 rounded-lg px-4 hover:bg-blue-500 text-white text-xs py-2 my-2">{{auth()->user()->isfollowing($user)? 'unfollow' : 'follow' }}</button>
</form>