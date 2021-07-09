<x-app>
   
   {{-- {{dd($notifications[0]->data['followed'])}} --}}
    <h1 class="text-center font-bold tracking-wide text-3xl">Notifications</h1>
    <div>
        @forelse ($notifications as $notification)
        <div class="box py-3 border-2 border-gray-200 px-5">
            <div>
                @if ($notification->type =='App\Notifications\LikeNotification')
                    You got a new like on this tweet
                    <div class="border-2 py-2 border-gray-200">
                        {{$notification->data['tweet']['body']}}
                    </div>
                @endif
                @if($notification->type == 'App\Notifications\FollowNotification' && $notification->data['followed'] ===false)
                <img src="{{$notification->data['follower']['avatar']}}" class="w-10 h-10 rounded-full" alt="avatar">
                <a class="text-blue-500" href="{{route('profile.show',$notification->data['follower']['username'] )}}">@ {{$notification->data['follower']['username']}} followed you</a> 
                @endif
            </div>
            
        </div>    
       @empty
        <div class="bg-red-400 px-5 py-3 text-white mt-2">
            Notifications are empty
        </div>
        @endforelse
    </div>
</x-app>