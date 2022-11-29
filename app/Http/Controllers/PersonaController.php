<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Categoria;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::orderBy('apellidos')->get();
        return view('paginas/personas/index', compact('personas'));
    }

    public function create()
    {
        return view('paginas/personas/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'estrella' => 'required',
            'categoria_id' => 'required'
        ]);

        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        $persona->estrella = $request->estrella;
        $persona->categoria_id = $request->categoria_id;
        $persona->save();

        return redirect()->route('personas.index');
    }

    public function show(Persona $persona)
    {
        return view('paginas/personas/show', compact('persona'));
    }

    public function edit(Persona $persona)
    {
        return view('paginas/personas/edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'estrella' => 'required',
            'categoria_id' => 'required'
        ]);

        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        $persona->estrella = $request->estrella;
        $persona->categoria_id = $request->categoria_id;
        $persona->save();

        return redirect()->route('personas.index');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index');
    }
}
