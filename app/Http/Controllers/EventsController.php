<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Localizacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{

    public function events() {
        // Obtener todas las localizaciones desde la base de datos
        $localizaciones = Localizacion::all();

        // Para cada localización, verificar si tiene eventos asociados
        $localizacionesConEventos = $localizaciones->map(function ($localizacion) {
        $localizacion->has_events = Evento::where('localiz_id', $localizacion->localiz_id)->exists();
        return $localizacion;
        });

        return view('modules/events/events', compact('localizacionesConEventos'));
    }

    public function showCityEvents($localiz_id) {
        $localizacion = Localizacion::findOrFail($localiz_id);
        $eventos = Evento::where('localiz_id', $localiz_id)->get();

        return view('modules/events/cityEvents', compact('localizacion', 'eventos'));
    }

    public function showEventDetails($localiz_id, $evento_id) {
        $evento = Evento::findOrFail($evento_id);
        $localizacion = Localizacion::findOrFail($localiz_id);

        return view('modules/events/showEvent', compact('evento', 'localizacion'));
    }

    public function maintenance() {
        return view("modules/events/maintenance");
    }

    public function addEvent() {
        // Obtener todas las localizaciones
        $localizaciones = Localizacion::all();
        // Pasar las localizaciones a la vista
        return view('modules.admin.createEvent', compact('localizaciones'));
    }

    public function showEventsLocalization() {
        // Obtener todos los eventos junto con su localización
        $eventos = Evento::with('localizacion')->get();
        // Asegúrate de pasar los datos correctamente a la vista
        return view('modules.admin.menuEvent', compact('eventos'));
    }

    public function menuEvent() {
        return view("modules.admin.menuEvent");
    }

    public function store(Request $request) {

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
        if ($request->hasFile('evento_imagen')) {
            // Almacenar el archivo en el directorio 'public/images' dentro de 'storage/app'
            $imagenPath = $request->file('evento_imagen')->store('images', 'public');
            //dd($imagenPath); // Ver la ruta completa donde se ha guardado el archivo
        } else {
            dd('No se ha enviado ningún archivo.');
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

    public function edit($id) {
    // Obtener el evento por su evento_id
    $evento = Evento::where('evento_id', $id)->firstOrFail();
    $localizaciones = Localizacion::all();

    // Pasar el evento y las localizaciones a la vista
    return view('modules.admin.editEvent', compact('evento', 'localizaciones'));
    }

    public function update(Request $request, $id) {

        // Validación de los datos
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

        // Buscar el evento por evento_id
        $evento = Evento::where('evento_id', $id)->firstOrFail();
        //dd($evento);

        // Combina fecha y hora para comparar completamente
        $horaInicio = Carbon::createFromFormat('Y-m-d H:i', $request->evento_fecha . ' ' . $request->evento_hora_inicio);
        $horaFin = Carbon::createFromFormat('Y-m-d H:i', $request->evento_fecha . ' ' . $request->evento_hora_fin);

        // Si la hora de fin es menor o igual que la de inicio, sumamos un día a la hora de fin
        if ($horaFin <= $horaInicio) {
            $horaFin->addDay();
        }

        // Guardar la imagen si se sube una nueva
        $imagenPath = $evento->evento_imagen; // Mantener la imagen actual si no se sube una nueva
        if ($request->hasFile('evento_imagen')) {
            // Si se sube una nueva imagen, eliminar la anterior
            if ($evento->evento_imagen && file_exists(storage_path('app/public/' . $evento->evento_imagen))) {
                unlink(storage_path('app/public/' . $evento->evento_imagen));
            }

            // Guardar la nueva imagen
            $imagenPath = $request->file('evento_imagen')->store('images', 'public');
        }

        // Actualizar el evento con los nuevos datos
        $evento->evento_nombre = $request->evento_nombre;
        $evento->evento_fecha = $request->evento_fecha;
        $evento->evento_hora_inicio = $horaInicio->format('H:i');
        $evento->evento_hora_fin = $horaFin->format('H:i');
        $evento->evento_precio = $request->evento_precio;
        $evento->evento_descripcion = $request->evento_descripcion;
        $evento->localiz_id = $request->localiz_id;
        $evento->evento_imagen = $imagenPath;

        $evento->save();

        //dd($evento->fresh());

        return redirect()->route('editEvent', $evento->evento_id)->with('success', 'Evento actualizado exitosamente.');
    }

    public function destroy($id) {
        // Buscar el evento por ID
        $evento = Evento::findOrFail($id);

        // Eliminar la imagen asociada si existe
        if ($evento->evento_imagen && file_exists(storage_path('app/public/' . $evento->evento_imagen))) {
            unlink(storage_path('app/public/' . $evento->evento_imagen)); // Eliminar la imagen
        }

        // Eliminar el evento de la base de datos
        $evento->delete();

        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('menuEvent')->with('success', 'Evento eliminado exitosamente.');
    }


}
