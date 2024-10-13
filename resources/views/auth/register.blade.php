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

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-black" />
                <x-input id="password" class="block mt-1 w-full text-black" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-black"/>
                <x-input id="password_confirmation" class="block mt-1 w-full text-black" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-2 flex items-center ml-1">
                <input type="checkbox" id="show_passwords" onclick="togglePasswords()" class="mr-1 rounded-md">
                <label for="show_passwords" class="text-sm text-black ">Show Passwords</label>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="w-full flex justify-center items-center mt-4">
                <x-button class="w-full">
                    {{ __('Register') }}
                </x-button>
            </div>

            <div class="flex items-center justify-end mt-4 mb-3">
                <a class="mr-1 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </form>

        <script>
            function togglePasswords() {
                // Get both password fields
                var passwordInput = document.getElementById("password");
                var confirmPasswordInput = document.getElementById("password_confirmation");
        
                // Toggle the type attribute between 'password' and 'text'
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    confirmPasswordInput.type = "text";
                } else {
                    passwordInput.type = "password";
                    confirmPasswordInput.type = "password";
                }
            }
        </script>
    </x-authentication-card>
</x-guest-layout>
