<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="col">
                <div class="m-5" style=" text-align: center;">
                    <h1 class="text-6xl text-white">ABC Shop App</h1>
                   </div>
                   <div class="m-5" style=" text-align: center;">
                <h1 class="text-5xl text-gray-600">Login</h1>
               </div>
            </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>

                <a class="bg-transparent hover:bg-blue-500 text-gray-500 font-semibold hover:text-white py-1 px-4 ml-2 border border-white-500 hover:border-transparent rounded" href="{{ url()->previous() }}">
                    {{ __('Back') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
