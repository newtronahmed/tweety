<div class="border border-gray-300   rounded-lg "> 
    @forelse($tweets as $tweet)
    
        @include('_single-tweet')
        
        @empty
        <p class="p-4 ">
        	No Tweets yet
        </p>

    @endforelse
    {{$tweets->links()}}
    
</div>