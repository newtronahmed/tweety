<x-master>


    <div class="md:flex p-3 bg-purple-200  rounded-2xl">
        
            <div class="shadow w-full rounded-2xl md:w-1/2 p-10 bg-white ">
                
                <div class="text-3xl my-3 tracking-widest font-bold">{{ __('Log in') }}</div>
                <div class="text-sm">
                    Login with the email you registerd with.
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="my-3">
                            <label for="email" class="col-md-4 my-1 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" 
                                class=" rounded-xl p-2 text-purple-500 inline-block   border-2 w-full focus:outline-none focus:border-gray-300 @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}"  autocomplete="email"  autofocus>

                                @error('email')
                                    <span class="text-sm text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="" >{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" 
                                class="border-2 rounded-xl w-full focus:outline-none focus:border-gray-300 p-2 @error('password') is-invalid @enderror" 
                                name="password"  autocomplete="current-password">
                                <div>
                                @error('password')
                                    <span class="text-sm text-red-500" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-check my-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Keep me logged in') }}
                            </label>
                        </div>

                        <div class="mb-6">
                    
                                <button type="submit" class=" w-full py-3 bg-purple-400 text-white mt-3 focus:outline-none hover:bg-purple-500 rounded-xl border-2 border-gray-200 px-1">
                                    {{ __('Login') }}
                                </button>
                                <a  class="text-sm mx-2 text-purple-500 underline" href=" {{route('password.request')}}">Forgot Password </a>
                                <a class="text-sm text-purple-500 mx-2 underline" href="{{route('register')}}">Sign up</a>
                           
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full md:w-1/2 bg-purple-600 gradient-to-t text-white p-10 rounded-2xl">
                <div class="text-4xl text-center font-bold tracking-widest">Welcome Back</div>
            </div>
    </div>

</x-master>
