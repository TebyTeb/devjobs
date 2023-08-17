<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4"
        :status="session('status')" />

    <form method="POST"
        action="{{ route('login') }}"
        novalidate>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email"
                :value="__('Email')" />
            <x-text-input class="mt-1 block w-full"
                id="email"
                name="email"
                type="email"
                :value="old('email')"
                required
                autofocus
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
                autocomplete="current-password" />

            <x-input-error class="mt-2"
                :messages="$errors->get('password')" />
        </div>

        <!-- Remember Me -->
        <div class="mt-4 block">
            <label class="inline-flex items-center"
                for="remember_me">
                <input
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    id="remember_me"
                    name="remember"
                    type="checkbox">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Mantener sesión iniciada') }}</span>
            </label>
        </div>

        <div class="my-4 flex items-center justify-between">
            <x-link :href="route('password.request')">
                Olvidaste tu password
            </x-link>

            <x-link :href="route('register')">
                Crear Cuenta
            </x-link>
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('iniciar sesión') }}
        </x-primary-button>
    </form>
</x-guest-layout>
