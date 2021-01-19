<h1 class="font-bold text-xl mb-4 pl-4">Follows </h1>
<ul>
	@forelse(auth()->user()->follows as $user)
	<li>
		<div class="pl-4" >
			<a href="{{route('profile.show',$user)}}" class="flex items-center mb-4">
				
			<img src="{{$user->avatar}}" class="w-10 h-10  rounded-full mr-2" >
			{{$user->name}}
			</a>
		</div>
	</li>
	@empty
	<div>Follow someone </div>
	@endforelse

</ul>