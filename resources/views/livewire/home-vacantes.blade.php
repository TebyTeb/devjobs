<div>
    <livewire:filtrar-vacantes />

    <div class="py-12">
        <div class="mx-auto max-w-7xl">
            <h3 class="mb-12 text-4xl font-extrabold text-gray-700">Nuestras Vacantes Disponibles</h3>

            <div class="divide-y divide-gray-200 rounded-lg bg-white p-6 shadow-sm">
                @forelse ($vacantes as $vacante)
                    <div class="py-5 md:flex md:items-center md:justify-between">
                        <div class="md:flex-1">
                            <a class="text-3xl font-extrabold text-gray-600"
                                href="{{ route('vacantes.show', $vacante->id) }}" >{{ $vacante->titulo }}</a>
                            <p class="mb-1 text-base text-gray-600">{{ $vacante->empresa }}</p>
                            <p class="mb-1 text-sm font-bold text-gray-600">{{ $vacante->categoria->categoria }}</p>
                            <p class="mb-1 text-base text-gray-600">{{ $vacante->salario->salario }}</p>
                            <p class="text-xs font-bold text-gray-600">
                                Último día para postularse:
                                <span class="font-normal">{{ $vacante->ultimo_dia->format('d/m/Y') }}</span>
                            </p>
                        </div>
                        <div class="mt-5 md:mt-0">
                            <a class="rounded-lg bg-indigo-500 p-3 text-sm font-bold uppercase text-white block text-center"
                                href="{{ route('vacantes.show', $vacante->id) }}">Ver Vacante</a>
                        </div>
                    </div>
                @empty
                    <p class="p-3 text-center text-sm text-gray-600">No hay vacantes aún</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
