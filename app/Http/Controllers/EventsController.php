<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Localizacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{

    public function searchEvents(Request $request) {
        $query = $request->input('query'); // Obtener el término de búsqueda desde el request
        // Si hay un término de búsqueda, devolver los resultados en formato JSON
        if ($query) {
            // Realizamos la consulta buscando los eventos por nombre
            $events = Evento::where('evento_nombre', 'like', '%' . $query . '%')
                            //->limit(5) // Limitar la cantidad de resultados
                            ->get(['evento_id', 'evento_nombre', 'localiz_id']);
            return response()->json($events); // Devolver los eventos como JSON
        }
        // Si no hay término de búsqueda, simplemente devolver la vista principal
        return view('modules.dashboard.home');
    }

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

    public function filtros(Request $request, $localiz_id) {
        $localizacion = Localizacion::findOrFail($localiz_id);
        // Obtener el valor de 'order' y asegurarse de que es válido
        $order = $request->input('order', 'asc');
        // Validar que 'order' sea 'asc' o 'desc'
        if (!in_array($order, ['asc', 'desc'])) {
            $order = 'asc'; // valor por defecto si es inválido
        }
        // Obtener los eventos de la localización ordenados alfabéticamente
        $eventos = Evento::where('localiz_id', $localiz_id)
                 ->orderByRaw('LOWER(evento_nombre) ' . $order)
                 ->get();
        return view('modules/events/cityEvents', compact('localizacion', 'eventos'));
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
        return view('modules.admin.createEvent', compact('localizaciones'));
    }

    public function showEventsLocalization() {
        // Obtener todos los eventos junto con su localización
        $eventos = Evento::with('localizacion')->get();
        return view('modules.admin.menuEvent', compact('eventos'));
    }

    public function menuEvent() {
        return view("modules.admin.menuEvent");
    }

    public function shareParty($localiz_id, $evento_id) {
        $evento = Evento::findOrFail($evento_id);
        $localizacion = Localizacion::findOrFail($localiz_id);
        return view('modules/events/showEvent', compact('evento', 'localizacion'));
    }

    public function store(Request $request) {

        //dd($request->all());

        $request->validate([
            'evento_nombre' => 'required|string|max:100',
            'evento_fecha' => 'required|date',
            'evento_hora_inicio' => 'required',
            'evento_hora_fin' => 'required',
            'evento_precio' => 'required|numeric|min:0',
            'evento_descripcion' => 'required|string|max:400',
            'localiz_id' => 'required|exists:localizaciones,localiz_id',
            'evento_imagen' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'localiz_id.required'=> 'la localización es obligatoria.',
            'evento_precio.min' => 'El precio tiene que ser mayor que 0.',
        ]);


        //dd('Los datos han pasado la validación.');

        // Guarda la imagen
        if ($request->hasFile('evento_imagen')) {
            // Almacenar el archivo en el directorio 'public/images' dentro de 'storage/app'
            $imagenPath = $request->file('evento_imagen')->store('images', 'public');
            //dd($imagenPath); // Ver la ruta completa donde se ha guardado el archivo
        }

        $item = new Evento();
        $item->evento_nombre = $request->evento_nombre;
        $item->evento_fecha = $request->evento_fecha;
        $item->evento_hora_inicio = $request->evento_hora_inicio;
        $item->evento_hora_fin = $request->evento_hora_fin;
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
    return view('modules.admin.editEvent', compact('evento', 'localizaciones'));
    }

    public function update(Request $request, $id) {

        // Validación de los datos
        $request->validate([
            'evento_nombre' => 'nullable|string|max:100',
            'evento_fecha' => 'required|date',
            'evento_hora_inicio' => 'required',
            'evento_hora_fin' => 'required',
            'evento_precio' => 'nullable|numeric|min:0',
            'evento_descripcion' => 'nullable|string|max:400',
            'localiz_id' => 'required|exists:localizaciones,localiz_id',
            'evento_imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'evento_precio.min' => 'El precio tiene que ser mayor que 0.',
        ]);

        // Buscar el evento por evento_id
        $evento = Evento::where('evento_id', $id)->firstOrFail();
        //dd($evento);

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
        $evento->evento_hora_inicio = $request->evento_hora_inicio;
        $evento->evento_hora_fin = $request->evento_hora_fin;
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
        return redirect()->route('menuEvent')->with('success', 'Evento eliminado exitosamente.');
    }

}
