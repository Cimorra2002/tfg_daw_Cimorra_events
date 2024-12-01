<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Localizacion;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    public function addEvent()
    {
        // Obtener todas las localizaciones
        $localizaciones = Localizacion::all();

        // Pasar las localizaciones a la vista
        return view('modules.admin.createEvent', compact('localizaciones'));
    }

    public function store(Request $request)
    {

        //dd($request->all());

        $request->validate([
            'evento_nombre' => 'required|string|max:100',
            'evento_fecha' => 'required|date',
            'evento_hora_inicio' => 'required|date_format:H:i',
            'evento_hora_fin' => 'required|date_format:H:i',
            'evento_precio' => 'nullable|numeric|min:0',
            'evento_descripcion' => 'nullable|string',
            'localiz_id' => 'required|exists:localizaciones,localiz_id',
            'evento_imagen' => 'nullable|image|max:2048',
        ]);

    // Combina fecha y hora para comparar completamente
    $horaInicio = Carbon::createFromFormat('Y-m-d H:i', $request->evento_fecha . ' ' . $request->evento_hora_inicio);
    $horaFin = Carbon::createFromFormat('Y-m-d H:i', $request->evento_fecha . ' ' . $request->evento_hora_fin);

    // Si la hora de fin es menor o igual que la hora de inicio, ajustamos la hora de fin para el día siguiente
    if ($horaFin <= $horaInicio) {
        $horaFin->addDay(); // Añadimos un día a la hora de fin
    }

        //dd('Los datos han pasado la validación.');

        // Guarda la imagen
        $imagenPath = null;
        if ($request->hasFile('evento_imagen')) {
            $imagenPath = $request->file('evento_imagen')->store('eventos', 'public');
        }

        $item = new Evento();
        $item->evento_nombre = $request->evento_nombre;
        $item->evento_fecha = $request->evento_fecha;
        $item->evento_hora_inicio = $horaInicio->format('H:i'); // Hora de inicio formateada
        $item->evento_hora_fin = $horaFin->format('H:i'); // Hora de fin formateada
        $item->evento_precio = $request->evento_precio;
        $item->evento_descripcion = $request->evento_descripcion;
        $item->localiz_id = $request->localiz_id;
        $item->evento_imagen =  $imagenPath;
        $item->save();

        return redirect()->route('createEvent')->with('success', 'Evento creado exitosamente.');
    }

}
