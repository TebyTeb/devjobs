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

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="rol"
                :value="__('¿Qué tipo de cuenta deseas en DevJobs?')" />

            <select class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
                id="rol"
                name="rol">

                <option value="">-- Selecciona un rol --</option>
                <option value="1">Developer - Obtener empleo</option>
                <option value="2">Recruiter - Publicar empleos</option>

            </select>
            {{-- <x-text-input class="mt-1 block w-full"
                id="email"
                name="email"
                type="email"
                :value="old('email')"
                required
                autocomplete="username" /> --}}
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
