<x-master>
    @section('css')
        <link rel="stylesheet" href="{{asset('css/trix.css')}}">
    @endsection
<main class="container mx-auto">
    @if(session()->has('danger')))
    <div class="danger  bg-red-500 absolute top-0 right-0 p-3 " id='danger'>
        {{session()->get('danger')}}
    </div>
    @endif
    @if(session()->has('success'))
    <div id='success' class=" bg-green-500 fixed top-0 right-0  p-3">
        {{session()->get('success')}}
    </div>
    @endif
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
@section('js')
    <script src="{{asset('js/plugins/trix.js')}}"></script>
    <script>
        let toast = document.getElementById('success')
        if(toast){

            setTimeout(() => {
                toast.classList.add('hidden')
            }, 4000);
        }
       
    </script>
@endsection
</x-master>
