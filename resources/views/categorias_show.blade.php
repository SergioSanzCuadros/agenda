<x-base>

    <x-slot:titulo>Ver Categoría</x-slot:titulo>

    <h3>Nombre: {{ $categoria->nombre }}</h3>

    <br>

    <a href='{{ route('categorias.edit', $categoria) }}'><input class='button' type='button' value='Editar categoría' /></a>

    <br><br>

    <form id='{{ $categoria->id }}' action='{{ route('categorias.destroy', $categoria) }}'
          method='post'>
        @method('delete')

        <input class='button' type='submit' name='crear' value='Eliminar categoría' />
    </form>

    <br>

    <a href='{{ route('categorias.index') }}'>Volver al listado de categorías.</a>

</x-base>
