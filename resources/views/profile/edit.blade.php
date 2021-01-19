<x-app>
	<form class="" action='{{route('profile.update',auth()->user())}}' method="Post" 
		enctype="multipart/form-data">
		@method('patch')
		@csrf
		<div class="mb-6">
			<label class="font-bold block uppercase " for="name">Name</label>
			<input type="text" id='name' name="name" value="{{$user->name}}" class="border-2 focus:outline-none p-2 w-full border-gray-200 ">
			@error('name')
					<div class="text-sm text-red-400">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-6">
			<label class="font-bold block uppercase " for="username">Username</label>
			<input type="text" id='name' name="username" value="{{$user->username}}" class="border-2 focus:outline-none p-2 w-full border-gray-200 ">
			@error('username')
					<div class="text-sm text-red-400">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-6">
			<label class="font-bold uppercase block " for="email">Email</label>
			<input type="email" id="email" required name="email" value="{{$user->email}}" class="border-2 focus:outline-none p-2 w-full border-gray-200 ">
			@error('email')
					<div class="text-sm text-red-400">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-6">
			<label class="font-bold uppercase block " for="avatar">Avatar</label>
			<div class="flex">
			<input type="file" id="avatar"  name="avatar"  class="border-2 focus:outline-none p-2 w-full border-gray-200 ">
				<img width="40" src="{{$user->avatar}}">
			</div>
			@error('avatar')
					<div class="text-sm text-red-400">{{$message}}</div>
			@enderror
		</div>

		<div class="mb-6">
			<label class="font-bold uppercase block " for='password'>Password</label>
			<input type="password" name="password"  required id="password" class="border-2 focus:outline-none p-2 w-full border-gray-200 ">
			@error('password')
					<div class="text-sm text-red-400">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-6">
			<label class="font-bold uppercase block " for='password_confirmation'>Confirm Password</label>
			<input type="password" name="password_confirmation" id="password_confirmation" class="border-2 border-gray-200 focus:outline-none p-2 w-full ">
			@error('password_confirmation')
					<div class="text-sm text-red-400">{{$message}}</div>
			@enderror
		</div>
		<div class="mb-6">	
				<button class="bg-blue-400 text-white rounded px-2 py-1 mr-4" type="submit">submit</button>
				<a href="{{route('profile.show',$user)}}" class="hover:underline">cancel</a>
		</div>	
	</form>
</x-app>