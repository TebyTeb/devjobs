<div class="p-10">
    <div class="mb-5">
        <h3 class="my-3 text-3xl font-bold text-gray-800">{{ $vacante->titulo }}</h3>
    </div>

    <div class="my-10 bg-gray-50 p-4 md:grid md:grid-cols-2">

        <p class="tegra800 my-3 text-sm font-bold uppercase">
            Empresa:
            <span class="font-normal normal-case">{{ $vacante->empresa }}</span>
        </p>

        <p class="tegra800 my-3 text-sm font-bold uppercase">
            Último día para postularse:
            <span class="font-normal normal-case">{{ $vacante->ultimo_dia->toFormattedDateString() }}</span>
        </p>

        <p class="tegra800 my-3 text-sm font-bold uppercase">
            Categoría:
            <span class="font-normal normal-case">{{ $vacante->categoria->categoria }}</span>
        </p>

        <p class="tegra800 my-3 text-sm font-bold uppercase">
            Salario:
            <span class="font-normal normal-case">{{ $vacante->salario->salario }}</span>
        </p>

    </div>

    <div class="gap-4 md:grid md:grid-cols-6">
        <div class="col-span-2">
            <img src="{{ asset('storage/vacantes/' . $vacante->imagen) }}"
                alt="{{ 'Imagen de vacante ' . $vacante->titulo }}">
        </div>
        <div class="col-span-4">
            <h2 class="mb-5 text-2xl font-bold">Descripción del puesto</h2>
            <p>{{ $vacante->descripcion }}</p>
        </div>
    </div>

    @guest
        <div class="mt-5 border border-dashed bg-gray-50 p-5 text-center">
            <p>
                ¿Deseas aplicar a esta vacante? <a class="font-bold text-indigo-600"
                    href="{{ route('register') }}">Obten una cuenta y aplica a esta y otras vacantes</a>
            </p>
        </div>
    @endguest

    @cannot('create', App\Models\Vacante::class)
        <livewire:postular-vacante :vacante="$vacante" />
    @endcannot

</div>
