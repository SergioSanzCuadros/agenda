<label for='nombre'>Nombre</label>
<input type='text' id='nombre' name='nombre' value='{{ $nombre_per ?? '' }}' />

<label for='apellidos'>Apellidos</label>
<input type='text' id='apellidos' name='apellidos' value='{{ $apellidos_per ?? '' }}' />

<label for='telefono'>Teléfono</label>
<input type='text' id='telefono' name='telefono' value='{{ $telefono_per ?? '' }}' />

<label for='estrella'>Estrella</label>
<input type='text' id='estrella' name='estrella' value='{{ $estrella_per ?? '' }}' />

<label for='categoria_id'>Categoría</label>
<select id='categoria_id' name='categoria_id'>
    <optgroup label='Categorías'>
        @foreach(\App\Models\Categoria::get() as $categoria)
            <option {{ (string)$categoria->id == ($categoria_per ?? '') ? 'selected' : '' }} value='{{ $categoria->id }}'> {{ $categoria->nombre }}</option>
        @endforeach
    </optgroup>
</select>

<br><br>
