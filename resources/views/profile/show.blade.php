<x-app>
<header class="relative">

	<img src="{{asset('images/reactlaravel.jpeg')}}" class="rounded-lg w-full " alt='profilepic' style='max-height: 223px;'>
	
	<img src="{{$user->avatar}}" width="150px"  class="absolute bottom-0 rounded-full transform -translate-x-1/2 translate-y-1/2" style="left:50%; height: 150px;">

</header> 

	<div class="flex justify-between items-center mb-4">
		<div style="max-width: 270px;">

			<h2 class="font-bold text-2xl mb-1">{{$user->name}}</h2>

			<p class="text-sm ">Joined {{$user->created_at->diffForHumans()}}</p>

		</div>
		<div class="flex">

			@can('edit',$user)

			<a href="{{route('profile.edit',$user)}}" class="border border-gray-300 rounded-lg  px-4 py-2 my-2 text-xs">Edit profile</a>

			@endcan

			@if(!auth()->user()->is($user))

			<x-follow-button :user='$user'></x-follow-button>
			@endif
		</div>
	</div>
	<div class="mb-4">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur	
	</div>

@include('_timeline',['tweets'=>$tweets])
</x-app>