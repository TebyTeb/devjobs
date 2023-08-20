<div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">

    @forelse ($vacantes as $vacante)
        <div
            class="border-b border-gray-200 p-6 text-gray-900 dark:text-gray-100 md:flex md:items-center md:justify-between">
            <div class="space-y-3">

                <a class="text-xl font-bold"
                    href="#">
                    {{ $vacante->titulo }}
                </a>

                <p class="text-sm font-bold text-gray-600">{{ $vacante->empresa }}</p>
                <p class="text-sm text-gray-500">Último día: {{ $vacante->ultimo_dia->format('d/m/Y') }} </p>

            </div>

            <div class="mt-5 flex flex-col items-stretch gap-3 md:mt-0 md:flex-row">
                <a class="rounded-lg bg-slate-800 px-4 py-2 text-center text-xs font-bold uppercase text-white"
                    href="#">Candidatos</a>
                <a class="rounded-lg bg-blue-800 px-4 py-2 text-center text-xs font-bold uppercase text-white"
                    href="{{ route('vacantes.edit', $vacante->id) }}">Editar</a>
                <a class="rounded-lg bg-red-600 px-4 py-2 text-center text-xs font-bold uppercase text-white"
                    href="#">Eliminar</a>
            </div>

        </div>
    @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay vacantes que mostrar</p>
    @endforelse

</div>

<div class="mt-10 flex justify-center sm:block">
    {{ $vacantes->links() }}
</div>
