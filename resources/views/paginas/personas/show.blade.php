<x-base>

    <x-slot:titulo>Ver Persona</x-slot:titulo>

    <h3>Nombre: {{ $persona->nombre }}</h3>
    <h3>Apellidos: {{ $persona->apellidos }}</h3>
    <h3>Teléfono: {{ $persona->telefono }}</h3>
    <h3>Categoría: {{ $persona->categoria->nombre }}</h3>

    <br>

    <a href='{{ route('personas.edit', $persona) }}'><input class='button' type='button' value='Editar persona' /></a>

    <br><br>

    <form id='{{ $persona->id }}' action='{{ route('personas.destroy', $persona) }}'
          method='post'>
        @method('delete')

        <input class='button' type='submit' name='crear' value='Eliminar persona' />
    </form>

    <br>

    <a href='{{ route('personas.index') }}'>Volver al listado de personas.</a>

</x-base>
