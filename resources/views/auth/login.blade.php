<x-guest-layout> 

    <x-authentication-card>

        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <h1 style="font-size: 1.5rem; font-weight: bold; text-align: center; margin-bottom: .75rem; margin-top: -1.75rem">Log in</h1>

        <form method="POST" action="{{ route('login') }}"> 
            
            @csrf  

            <div>
                <x-label for="email" value="{{ __('Email') }}" class="text-white" />
                <x-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
            
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-white" />
                <x-input id="password" class="block mt-1 w-full text-black" type="password" name="password" required autocomplete="current-password"/>
                <div class="mb-5 mr-5 flex items-center justify-end">
                    <input type="checkbox" id="show_password" onclick="togglePassword()" class="mr-4"  style="border-radius: 4px; border: 1px solid #000; margin-top: -40px; margin-right: 15px">
                </div>
            </div>

            <div class="block mt-4 ml-2">
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ms-2 text-sm text-white-600">{{ __('Remember me') }}</span>
                    </label>
                    <div>
                        @if (Route::has('password.request'))
                            <a class="text-xs text-white-600 hover:text-gra-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 hover:underline focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="flex items-center justify-center mt-4 ">
                <x-button class="w-full flex justify-center items-center "
                style="background-color: #FC5400;">
                    {{ __('Log in') }}
                </x-button>
            </div>
            
            <div class="flex items-center justify-center mt-4">
                <a href="{{ url('/') }}" class="w-full flex justify-center items-center text-white py-1 px-4 rounded-md text-center"
                   style="background-color: #131f3e;">
                    {{ __('Cancel') }}
                </a>
            </div>            
                     
            <div class="mt-4 text-center">
                <p>
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Sign up here</a>.
                </p>
            </div>
        </form>

        <script>
            function togglePassword() {
                var passwordInput = document.getElementById("password");
                var passwordType = passwordInput.getAttribute("type");
                
                if (passwordType === "password") {
                    passwordInput.setAttribute("type", "text");
                } else {
                    passwordInput.setAttribute("type", "password");
                }
            }
        </script>

    </x-authentication-card>
 
</x-guest-layout>
