<div class="p-4  border-b border-gray-200 ">
	<div class="flex item-center">
		<div class="flex-shrink-0">
			<a href="{{route('profile.show',$tweet->user)}}">
				<img src="{{$user->avatar}}" class="w-10 h-10    rounded-full mr-4">
			</a>
		</div>

		<div>
			<a href="{{route('profile.show',$tweet->user)}}">
				<h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
			</a>
			<p class="accordion"> {{$tweet->body}} </p>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
			<div class="flex">
				<form action="/tweets/{{$tweet->id}}/like" method="post">
					@csrf
					<div class=" items-center mr-4">
						<button type="submit" class="w-4 h-3 {{$tweet->isLikedBy(auth()->user()) ? 'bg-blue-500' : 'bg-gray-400'}} border-2 inline-flex mr-1"></button><span class="text-sm text-gray-400">{{$tweet->likes ?: 0}}</span>
					</div>

				</form>
				<form action="/tweets/{{$tweet->id}}/like" method="post">
					@csrf
					@method('DELETE')
					<div class=" items-center">
						<button type="submit" class="w-4 h-3 {{$tweet->isDisLikedBy(auth()->user()) ? 'bg-blue-500' : 'bg-gray-400'}} border-2 inline-flex mr-1"></button><span class="text-sm text-gray-400">{{$tweet->dislikes ?: 0}}</span>
					</div>

				</form>
			</div>
		</div>

	</div>


</div>