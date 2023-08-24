<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Candidatos Vacante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="my-10 text-center text-2xl font-bold">Candidatos Vacante: {{ $vacante->titulo }}</h1>

                    <div class="p-5 md:flex md:justify-center">
                        <ul class="w-full divide-y divide-gray-200">
                            @forelse ($vacante->candidatos as $candidato)
                                <li class="flex items-center p-3">
                                    <div class="flex-1">
                                        <p class="text-xl font-medium text-gray-800">{{ $candidato->user->name }}</p>
                                        <p class="text-sm text-gray-600">{{ $candidato->user->email }}</p>
                                        <p class="text-sm font-medium text-gray-600">
                                            Se postuló: <span
                                                class="font-normal">{{ $candidato->created_at->diffForHumans() }}</span>
                                        </p>
                                    </div>
                                    <div>
                                        <a class="inline-flex items-center rounded-full border border-gray-300 bg-white px-2.5 py-0.5 text-sm font-medium leading-5 text-gray-700 shadow-sm hover:bg-gray-50"
                                            href="{{ asset('storage/cv/' . $candidato->cv) }}"
                                            target="_blank"
                                            rel="noreferrer noopener">Ver CV</a>
                                    </div>
                                </li>
                            @empty
                                <p class="p-3 text-center text-sm text-gray-600">No hay candidatos aún</p>
                            @endforelse
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
