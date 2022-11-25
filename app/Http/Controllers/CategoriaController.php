<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::orderBy('nombre')->get();

        return view('paginas/categorias/index', compact('categorias'));
    }

    public function create()
    {
        return view('paginas/categorias/create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
        ]);

        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();

        return redirect()->route('categorias.index');
    }

    public function show(Categoria $categoria)
    {
        return view('paginas/categorias/show', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        return view('paginas/categorias/edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $this->validate($request, [
            'nombre' => 'required',
        ]);

        $categoria->nombre = $request->nombre;
        $categoria->save();

        return redirect()->route('categorias.index');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
