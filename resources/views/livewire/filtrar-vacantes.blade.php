<div class="bg-gray-100 py-10">
    <h2 class="my-5 text-center text-2xl font-extrabold text-gray-600 md:text-4xl">Buscar y Filtrar Vacantes</h2>

    <div class="mx-auto max-w-7xl">
        <form wire:submit.prevent='leerDatosFormulario' >
            <div class="gap-5 md:grid md:grid-cols-3">
                <div class="mb-5">
                    <label class="mb-1 block text-sm font-bold uppercase text-gray-700"
                        for="termino">Término de Búsqueda
                    </label>
                    <input
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        id="termino"
                        type="text"
                        placeholder="Buscar por Término: ej. Laravel"
                        wire:model="termino" />
                </div>

                <div class="mb-5">
                    <label class="mb-1 block text-sm font-bold uppercase text-gray-700">Categoría</label>
                    <select class="w-full border-gray-300 p-2"
                        wire:model="categoria">
                        <option>--Seleccione--</option>

                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label class="mb-1 block text-sm font-bold uppercase text-gray-700">Salario Mensual</label>
                    <select class="w-full border-gray-300 p-2"
                        wire:model="salario">
                        <option>-- Seleccione --</option>
                        @foreach ($salarios as $salario)
                            <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="flex justify-end">
                <input
                    class="w-full cursor-pointer rounded bg-indigo-500 px-10 py-2 text-sm font-bold uppercase text-white transition-colors hover:bg-indigo-600 md:w-auto"
                    type="submit"
                    value="Buscar" />
            </div>
        </form>
    </div>
</div>
