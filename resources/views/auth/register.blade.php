<x-guest-layout>
    <form method="POST"
        action="{{ route('register') }}"
        novalidate>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name"
                :value="__('Nombre')" />
            <x-text-input class="mt-1 block w-full"
                id="name"
                name="name"
                type="text"
                :value="old('name')"
                required
                autofocus
                autocomplete="name" />
            <x-input-error class="mt-2"
                :messages="$errors->get('name')" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email"
                :value="__('Email')" />
            <x-text-input class="mt-1 block w-full"
                id="email"
                name="email"
                type="email"
                :value="old('email')"
                required
                autocomplete="username" />
            <x-input-error class="mt-2"
                :messages="$errors->get('email')" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password"
                :value="__('Password')" />

            <x-text-input class="mt-1 block w-full"
                id="password"
                name="password"
                type="password"
                required
                autocomplete="new-password" />

            <x-input-error class="mt-2"
                :messages="$errors->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation"
                :value="__('Confirmar Password')" />

            <x-text-input class="mt-1 block w-full"
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                required
                autocomplete="new-password" />

            <x-input-error class="mt-2"
                :messages="$errors->get('password_confirmation')" />
        </div>

        <div class="my-4 flex items-center justify-center">
            <x-link :href="route('login')">
                Iniciar sesión
            </x-link>
        </div>
        <x-primary-button class="w-full justify-center">
            {{ __('crear cuenta') }}
        </x-primary-button>
    </form>
</x-guest-layout>
