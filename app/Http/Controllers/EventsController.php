<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function events() {
        return view("modules/events/events");
    }

    public function maintenance() {
        return view("modules/events/maintenance");
    }

    public function cityEvents($cityId) {
        return view("modules/events/cityEvents");
    }

    public function showEvent($cityId, $eventId) {
        return view("modules/events/showEvent");
    }

    public function store(Request $request)
    {
        $request->validate([
            'evento_nombre' => 'required|string|max:100',
            'evento_fecha' => 'required|date',
            'evento_hora_inicio' => 'required|date_format:H:i',
            'evento_hora_fin' => 'required|date_format:H:i|after:evento_hora_inicio',
            'evento_precio' => 'nullable|numeric|min:0',
            'evento_descripcion' => 'nullable|string',
            'localiz_id' => 'required|exists:localizaciones,localiz_id',
        ]);

        Evento::create($request->all());
        return redirect()->route('eventos.index')->with('success', 'Evento creado exitosamente.');
    }

}
