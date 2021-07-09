<ul>
	<li class="font-bold text-lg mb-4 ">
		<a href="{{route('home')}}">Home</a>
	</li>
	<li class="font-bold text-lg mb-4">
		<a href="{{route('explore')}}">Explore</a>
	</li>
	{{-- <li class="font-bold text-lg mb-4">
		Notifications
	</li>
	<li class="font-bold text-lg mb-4">
		Messages
	</li>
	<li class="font-bold text-lg mb-4">
		Bookmarks
	</li> --}}
	<li class="font-bold text-lg mb-4">
		<a href="{{route('notifications')}}">Notifications</a>
	</li>
	
	<li class="font-bold text-lg mb-4">
		<a href="{{route('profile.show',auth()->user())}}">Profile</a>
	</li>
	<li >
		<form method="POST" action="/logout">
			@csrf
			<button class='font-bold text-lg mb-4'>Logout</button>
		</form>
	</li>
</ul>