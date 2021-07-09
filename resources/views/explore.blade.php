<x-app>
	@foreach($users as $user)
		<a  href="{{route('profile.show',$user)}}" class="flex items-center mb-6 border-2 border-gray-200 p-3">	
			<img width="60" src="{{$user->avatar}}">
			<div>{{'@'.$user->username}}</div>
		</a>	
	@endforeach
	{{$users->links()}}
</x-app>