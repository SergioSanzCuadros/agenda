<x-base>

<x-slot:titulo>Editar Personas</x-slot:titulo>

<form method='post' action='{{ route('personas.update', $persona) }}'>
    @method('put')
    <x-personas_campos>
        <x-slot:nombre_per>
            {{ $persona->nombre }}
        </x-slot:nombre_per>
        <x-slot:apellidos_per>
            {{ $persona->apellidos }}
        </x-slot:apellidos_per>
        <x-slot:telefono_per>
            {{ $persona->telefono }}
        </x-slot:telefono_per>
        <x-slot:estrella_per>
            {{ $persona->estrella }}
        </x-slot:estrella_per>
        <x-slot:categoria_per>
            {{ $persona->categoria_id }}
        </x-slot:categoria_per>
    </x-personas_campos>
    <input class='button' type='submit' name='crear' value='Editar persona' />
</form>

<a href='{{ route('personas.index') }}'>Volver al listado de personas.</a>

</x-base>
