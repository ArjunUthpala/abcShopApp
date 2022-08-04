<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="col">
                <div class="m-5" style=" text-align: center;">
                    <h1 class="text-6xl text-white">ABC Shop App</h1>
                   </div>
                   <div class="m-5" style=" text-align: center;">
                <h1 class="text-5xl text-gray-600">Register</h1>
               </div>
            </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>


           
                <a class="bg-transparent hover:bg-blue-500 text-gray-500 font-semibold hover:text-white py-1 px-4 ml-2 border border-white-500 hover:border-transparent rounded" href="{{ url()->previous() }}">
                    {{ __('Back') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
