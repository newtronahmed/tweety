<x-master>
<main class="container mx-auto">
    <div class="container">
        <div class="lg:flex lg:justify-between">
            @auth
            <div class="lg:w-32">
                @include('_sidebar-links')
            </div>
            @endauth
            <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
                {{-- @yield('content') --}}
                {{$slot}}
            </div>
            @auth
            <div class="lg:w-1/6 text-sm rounded bg-blue-100">
                @include('_friends-list')
            </div>
            @endauth
        </div>
    </div>
            
</main>
</x-master>
