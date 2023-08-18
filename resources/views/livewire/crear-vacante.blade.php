<form class="space-y-5 md:w-1/2"
    wire:submit.prevent='crearVacante'>

    <!-- Nombre de Vacante -->
    <div>
        <x-input-label for="titulo"
            :value="__('titulo vacante')" />
        <x-text-input class="mt-1 block w-full"
            id="titulo"
            wire:model="titulo"
            type="text"
            :value="old('titulo')"
            placeholder="El título de tu vacante" />
        <x-input-error class="mt-2"
            :messages="$errors->get('titulo')" />
    </div>

    <!-- Salario de Vacante -->
    <div>
        <x-input-label for="salario"
            :value="__('salario mensual')" />
        <select
            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
            id="salario"
            wire:model="salario">

            <option value="">--Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{$salario->id}}">{{$salario->salario}}</option>
            @endforeach

        </select>
        <x-input-error class="mt-2"
            :messages="$errors->get('salario')" />
    </div>

    <!-- categoria de Vacante -->
    <div>
        <x-input-label for="categoria"
            :value="__('categoria')" />
        <select
            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
            id="categoria"
            wire:model="categoria">

            <option value="">--Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
            @endforeach

        </select>
        <x-input-error class="mt-2"
            :messages="$errors->get('categoria')" />
    </div>

    <!-- Empresa de Vacante -->
    <div>
        <x-input-label for="empresa"
            :value="__('empresa')" />
        <x-text-input class="mt-1 block w-full"
            id="empresa"
            wire:model="empresa"
            type="text"
            :value="old('empresa')"
            placeholder="Ej. Netflix, Uber, Shopify" />
        <x-input-error class="mt-2"
            :messages="$errors->get('empresa')" />
    </div>

    <!-- fecha validez de Vacante -->
    <div>
        <x-input-label for="ultimo_dia"
            :value="__('último día para postularse')" />
        <x-text-input class="mt-1 block w-full"
            id="ultimo_dia"
            wire:model="ultimo_dia"
            type="date"
            :value="old('ultimo_dia')" />
        <x-input-error class="mt-2"
            :messages="$errors->get('ultimo_dia')" />
    </div>

    <!-- descripción de Vacante -->
    <div>
        <x-input-label for="descripcion"
            :value="__('descripción del puesto')" />
        <textarea
            class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600 h-72"
            wire:model="descrupcion"
            placeholder="descripción general del puesto, experiencia"></textarea>
        <x-input-error class="mt-2"
            :messages="$errors->get('descripcion')" />
    </div>

    <!-- Imagen de Vacante -->
    <div>
        <x-input-label for="imagen"
            :value="__('imagen')" />
        <x-text-input class="mt-1 block w-full"
            id="imagen"
            wire:model="imagen"
            type="file" />
        <x-input-error class="mt-2"
            :messages="$errors->get('imagen')" />
    </div>

    <!-- Envío de formulario -->
    <x-primary-button>
        crear vacante
    </x-primary-button>

</form>
