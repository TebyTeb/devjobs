<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¡Gracias por registrarte! Antes de empezar deberías verificar tu email haciendo click en el enlace que acabamos de enviarte. Si no has recibido el email, haz click en el botón de "reenviar email de verificación" y te enviaremos uno nuevo.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
            {{ __('Se ha enviado un nuevo link de verificación a la dirección de email que especificaste durante el registro.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST"
            action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('reenviar email de verificación') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST"
            action="{{ route('logout') }}">
            @csrf

            <button
                class="rounded-md text-sm text-gray-600 hover:text-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-indigo-100 dark:focus:ring-offset-gray-800"
                type="submit">
                {{ __('cerrar sesión') }}
            </button>
        </form>
    </div>
</x-guest-layout>
