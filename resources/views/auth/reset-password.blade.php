<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
        
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
        
            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            </div>
        
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
        
            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                <div class="mb-5 mr-5 flex items-center justify-end">
                    <input type="checkbox" id="show_password" onclick="togglePasswords()" class="mr-2" style="border-radius: 4px; border: 1px solid #000; margin-top: -40px; margin-right: -10px">
                </div>
            </div>
        
            <div class="flex items-center justify-end mt-4">
                <x-button onclick="window.location.href = '{{ route('login') }}'">
                    {{ __('Reset Password') }}
                </x-button>
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
