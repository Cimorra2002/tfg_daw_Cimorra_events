<?php

namespace App\Http\Controllers;

use App\Models\Localizacion;
use Illuminate\Http\Request;

class LocalizacionController extends Controller
{
   /*
      Muestra una lista de localizaciones.

    public function index()
    {
        $localizaciones = Localizacion::all();
        return view('localizaciones.index', compact('localizaciones'));
    }


      Muestra el formulario para crear una nueva localización.

    public function create()
    {
        return view('localizaciones.create');
    }


      Almacena una nueva localización en la base de datos.

    public function store(Request $request)
    {
        $request->validate([
            'localiz_nombre' => 'required|string|max:100',
        ]);

        Localizacion::create($request->all());
        return redirect()->route('localizaciones.index')->with('success', 'Localización creada exitosamente.');
    }*/
}
