<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <section class="p-4 mb-6">
            <header class="container mx-auto flex items-center">
                <img src="{{asset('images/react.svg')}}" class="w-8 h-8 mr-1 rounded-full">
                <h3 class="text-xl"> Tweety</h3>
            </header>
        </section>

        {{$slot}}
    </div>
    <script src="https://unpkg.com/turbolinks"></script> 
    {{-- <script src="{{asset('js/app.js')}"></script> --}}
    
    <script src="{{asset('js/app.js')}}"></script>
    <script >
        
        let accordion = document.querySelec torAll('.accordion')
console.log('hello');

        for (let index = 0; index < accordion.length; index++) {
            const element = accordion[index];
            element.addEventListener('click', function(e) {
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
            })

        }
    </script>
</body>

</html>