<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
     $libros = Libro::all();
     return view('home',compact('libros'));
    }

    public function create()
    {
        return view('layouts.agregarLibros');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'anio_publicacion' => 'required|string|max:255',
            'autor' => 'required|string|email|max:255',
            'clasificacion' => 'required|string|email|max:255',
            'cantidad_paginas' => 'required|string|email|max:255',
        ]);
        Libro::create([
            'titulo' => $request->titulo,
            'anio_publicacion' => $request->anio_publicacion,
            'autor' => $request->autor,
            'clasificacion' => $request->clasificacion,
            'cantidad_paginas' => $request->cantidad_paginas,
        ]);

        return redirect()->route('libro.create')->with('success', 'Alumno creado exitosamente.');
    }

    public function edit($id)
    {
        $libro = Libro::findOrFail($id);
        return view('layouts.editarLibros', compact('libro'));

    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'anio_publicacion' => 'required|string|max:255',
            'autor' => 'required|string|email|max:255',
            'clasificacion' => 'required|string|email|max:255',
            'cantidad_paginas' => 'required|string|email|max:255'.$id,
        ]);

        $libro = Libro::findOrFail($id);
        $libro->update([
            'titulo' => $request->titulo,
            'anio_publicacion' => $request->anio_publicacion,
            'autor' => $request->autor,
            'clasificacion' => $request->clasificacion,
            'cantidad_paginas' => $request->cantidad_paginas,
]);
        return redirect()->route('libro.index')->with('success', 'Alumno actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return redirect()->route('libro.index')->with('success', 'Alumno eliminado exitosamente.');

    }






}
