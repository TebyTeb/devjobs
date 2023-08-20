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
            @error('name')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
            <!-- Alternativa con componentes de Blade -->
            {{-- <x-input-error class="mt-2"
                :messages="$errors->get('name')" /> --}}
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
            @error('email')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
            <!-- Alternativa con componentes de Blade -->
            {{-- <x-input-error class="mt-2"
                :messages="$errors->get('email')" /> --}}
        </div>

        <!-- Rol Select -->
        <div class="mt-4">
            <x-input-label for="rol"
                :value="__('¿Qué tipo de cuenta deseas en DevJobs?')" />

            <select
                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
                id="rol"
                name="rol">

                <option value="">-- Selecciona un rol --</option>
                <option value="1">Developer - Obtener empleo</option>
                <option value="2">Recruiter - Publicar empleos</option>

            </select>
            @error('rol')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
            <!-- Alternativa con componentes de Blade -->
            {{-- <x-input-error class="mt-2"
                :messages="$errors->get('rol')" /> --}}
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
            @error('password')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
            <!-- Alternativa con componentes de Blade -->
            {{-- <x-input-error class="mt-2"
                :messages="$errors->get('password')" /> --}}
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
            @error('password_confirmation')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
            <!-- Alternativa con componentes de Blade -->
            {{-- <x-input-error class="mt-2"
                :messages="$errors->get('password_confirmation')" /> --}}
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
