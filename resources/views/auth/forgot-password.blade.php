<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¿Olvidaste tu password? Coloca tu email de registro y te enviaremos un enlace para que puedas crear uno nuevo.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4"
        :status="session('status')" />

    <form method="POST"
        action="{{ route('password.email') }}">
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
                autofocus />
            @error('email')
                <livewire:mostrar-alerta :message="$message" />
            @enderror
            <!-- Alternativa con componentes de Blade -->
            {{-- <x-input-error class="mt-2"
                :messages="$errors->get('email')" /> --}}
        </div>

        <div class="my-4 flex items-center justify-between">
            <x-link :href="route('login')">
                Iniciar Sesión
            </x-link>

            <x-link :href="route('register')">
                Crear Cuenta
            </x-link>
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('restablecer contraseña') }}
        </x-primary-button>
    </form>
</x-guest-layout>
