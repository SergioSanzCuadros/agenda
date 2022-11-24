<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::orderBy('nombre')->get();

        return view('categorias_index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias_create');
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
        return view('categorias_show', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias_edit', compact('categoria'));
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
