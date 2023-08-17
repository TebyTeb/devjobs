
{{-- usando la variable $attributes recogemos el atributo href indicado al invocar el componente --}}
<a
    {{ $attributes->merge(['class' => 'rounded-md text-s text-gray-500 hover:text-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-indigo-800']) }}>
    {{ $slot }}
</a>
