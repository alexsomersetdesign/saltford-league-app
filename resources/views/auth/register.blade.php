<x-auth-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-forms.input-label class="text-white" for="name" :value="__('Name')" />
            <x-forms.text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-forms.input-label class="text-white" for="email" :value="__('Email')" />
            <x-forms.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-forms.input-label class="text-white" for="password" :value="__('Password')" />

            <x-forms.text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-forms.input-label class="text-white" for="password_confirmation" :value="__('Confirm Password')" />

            <x-forms.text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-white hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 px-4 py-2 bg-white text-green-900">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-auth-layout>
