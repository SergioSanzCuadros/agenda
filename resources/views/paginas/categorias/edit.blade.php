<x-base>

<x-slot:titulo>Editar Categorías</x-slot:titulo>

<form method='post' action='{{ route('categorias.update', $categoria) }}'>
    @method('put')
    <x-categorias_campos>
        <x-slot:nombre_cat>
            {{ $categoria->nombre }}
        </x-slot:nombre_cat>
    </x-categorias_campos>
    <input class='button' type='submit' name='crear' value='Editar categoría' />
</form>

<a href='{{ route('categorias.index') }}'>Volver al listado de categorías.</a>

</x-base>
