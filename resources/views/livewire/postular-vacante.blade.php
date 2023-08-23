<div class="mt-10 flex flex-col items-center justify-center bg-gray-100 p-5">
    <h3 class="my-4 text-center text-2xl font-bold">Postularme a esta Vacante</h3>

    @if (session()->has('mensaje'))
        <p class="my-5 border border-green-600 bg-green-100 p-2 text-sm font-bold uppercase text-green-600 rounded-lg">
            {{ session('mensaje') }}
        </p>

    @else

        <form class="mt-5 w-96"
            wire:submit.prevent='postularme'>
            <div class="mb-4">
                <x-input-label for="cv"
                    :value="__('Currículum Vitae (PDF)')" />
                <x-text-input class="mt-1 block w-full"
                    id="cv"
                    type="file"
                    wire:model='cv'
                    accept=".pdf" />

                @error('cv')
                    <livewire:mostrar-alerta :message="$message" />
                @enderror

                <x-primary-button class="my-5">
                    {{ __('Postularme') }}
                </x-primary-button>
            </div>
        </form>

    @endif

</div>
