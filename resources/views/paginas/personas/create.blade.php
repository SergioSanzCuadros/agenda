<x-base>

<x-slot:titulo>Crear Persona</x-slot:titulo>

<form method='post' action='{{ route('personas.store') }}'>
    @method('post')
    <x-personas_campos />
    <input class='button' type='submit' name='crear' value='Crear persona' />

</form>

<a href='{{ route('personas.index') }}'>Volver al listado de personas.</a>

</x-base>
