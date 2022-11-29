<x-base>

<x-slot:titulo>Listado de Personas</x-slot:titulo>

<table>

    <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Teléfono</th>
        <th>Estrella</th>
        <th>Categoría</th>
    </tr>

    @foreach ($personas as $persona)
    <tr>
        <td><a href='{{ route('personas.show', $persona->id) }}'>{{ $persona->nombre }}</a></td>
        <td><a href='{{ route('personas.show', $persona->id) }}'>{{ $persona->apellidos }}</a></td>
        <td><a href='{{ route('personas.show', $persona->id) }}'>{{ $persona->telefono }}</a></td>
        <td>
{{--            Me faltaria que al hacer clic en la estrella se cambie      --}}
            <a href='establecerEstrella.blade.php/{{ $persona }}'>
                <img class='estrella' src='{{ $persona->estrella == "1" ? "/img/estrella_rellena.png" : "/img/estrella_vacia.png" }}' />
            </a>
        </td>

        <td><a href='{{ route('categorias.show', $persona->categoria) }}'>{{ $persona->categoria->nombre }}</a></td>

        <td class='delete'>
            <form class='formulario' id='{{ $persona->id }}' action='{{ route('personas.destroy', $persona) }}' method='post'>
                @method('delete')

                <a href='#' onclick="document.getElementById('{{ $persona->id }}').submit()">(X)</a>
            </form>
        </td>
    </tr>
    @endforeach

</table>

<br>

<a href='{{ route('personas.create') }}'>Crear entrada</a>

<br><br>

<a href='{{ route('categorias.index') }}'>Gestionar listado de Categorías</a>

</x-base>
