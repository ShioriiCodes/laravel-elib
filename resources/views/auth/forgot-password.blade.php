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

        <div class="mb-4 text-sm text-gray-600 text-left">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-5">
                <x-button class="w-full mt-3">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>

            <div class="flex items-center justify-center mt-4">
                <a class="flex items-center justify-center text-2rem text-gray-600 hover:underline  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Cancel') }}
                </a>
            </div>
            
        </form>
    </x-authentication-card>
</x-guest-layout>
