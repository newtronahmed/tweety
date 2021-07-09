<x-master>


<div class="md:flex p-3 bg-purple-200  rounded-2xl">
    <div class="w-full rounded-2xl md:w-1/2 bg-purple-600 gradient-to-t text-white p-10">
        <div class="text-4xl text-center font-bold tracking-widest">Welcome </div>
    </div>
    
    <div class="shadow w-full rounded-2xl md:w-1/2 p-10 bg-white ">
        <div class="text-4xl tracking-widest my-3 font-bold">{{ __('Register') }}</div>

        <div class="card-body ">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="custom-shadow border-2 rounded-xl p-2 w-full focus:outline-none focus:border-gray-300 @error('email') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="custom-shadow border-2 rounded-xl p-2 w-full focus:outline-none focus:border-gray-300 @error('email') is-invalid @enderror"
                         name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="custom-shadow rounded-xl border-2 p-2 w-full focus:outline-none focus:border-gray-300 @error('email') is-invalid @enderror"
                         name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="custom-shadow border-2 rounded-xl p-2 w-full focus:outline-none focus:border-gray-300 @error('email') is-invalid @enderror"
                         name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control border-2 rounded-xl p-2 w-full focus:outline-none focus:border-gray-300 @error('email') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class=" w-full py-3 bg-purple-400 text-white mt-3 focus:outline-none hover:bg-purple-500 rounded-xl border-2 border-gray-200 px-1">
                            {{ __('Register') }}
                        </button>
                        <span class="text-sm">Already have an account ? </span><a class='text-sm text-purple-500 underline' href="{{route('login')}}">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
     
</div>
</x-master>
