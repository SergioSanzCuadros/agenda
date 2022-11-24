<x-base>

<x-slot:titulo>Crear Categorías</x-slot:titulo>

<form method='post' action='{{ route('categorias.store') }}'>
    @method('post')
    <x-categorias_campos/>
    <input class='button' type='submit' name='crear' value='Crear categoría' />

</form>

<a href='{{ route('categorias.index') }}'>Volver al listado de categorías.</a>

</x-base>
