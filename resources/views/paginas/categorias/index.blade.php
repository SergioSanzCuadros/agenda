<x-base>

<x-slot:titulo>Listado de Categorías</x-slot:titulo>

<table>

    <tr>
        <th>Nombre</th>
        <th></th>
    </tr>

    @foreach ($categorias as $categoria)
    <tr>
        <td><a href='{{ route('categorias.show',$categoria) }}'>{{ $categoria->nombre }}</a></td>
        <td class='delete'>
            <form class='formulario' id='{{ $categoria->id }}' action='{{ route('categorias.destroy', $categoria) }}' method='post'>
                @method('delete')

                <a href='#' onclick="document.getElementById('{{ $categoria->id }}').submit()">(X)</a>
            </form>
        </td>
    </tr>
    @endforeach

</table>

<br>

<a href='{{ route('categorias.create') }}'>Crear entrada</a>

<br>
<br>

<a href='{{ route('personas.index') }}'>Gestionar listado de Personas</a>

</x-base>
