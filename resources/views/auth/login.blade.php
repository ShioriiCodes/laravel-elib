<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="w-full flex justify-end items-center" style="margin-top: -4rem; margin-bottom: 4rem">
            <a href="{{ url('/') }}" class="flex justify-end items-center text-Black text-center" style="font-size: 3rem; margin-top: -5rem; margin-right: -.25rem">
                &times;
            </a>
        </div>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">

            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                <div class="mb-5 mr-5 flex items-center justify-end ">
                    <input type="checkbox" id="show_password" onclick="togglePassword()" class="mr-2"  style="border-radius: 4px; border: 1px solid #000; margin-top: -40px; margin-right: -10px">
                </div>
            </div>

            <div class="block ml-2">
                <div class="flex items-start justify-between ">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" class="text-back" />
                        <span class="ms-2 text-sm text-black">{{ __('Remember me') }}</span>
                    </label>
                        @if (Route::has('password.request'))
                            <a class="text-sm text-white-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 hover:underline focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif             
                </div>
            </div>

            <x-button class="w-full mt-8">
                {{ __('Log in') }}
            </x-button>

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
