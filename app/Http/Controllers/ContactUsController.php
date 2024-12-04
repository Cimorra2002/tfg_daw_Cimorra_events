<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs() {
        return view("modules/contactUs/contactUs");
    }

    /**
     * Store a newly created message in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'contact_nombre' => 'required|string|max:50',
            'contact_apellido' => 'required|string|max:50',
            'contact_correo' => 'required|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
            'contact_mensaje' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ],
        [
            'contact_nombre.required' => 'El nombre es obligatorio.',
            'contact_apellido.required' => 'El apellido es obligatorio.',
            'contact_correo.email' => 'El correo debe ser una dirección válida.',
            'contact_correo.regex' => 'El correo debe tener un dominio válido (por ejemplo: .com, .org, .net).',
            'contact_correo.required' => 'El correo es obligatorio.',
            'contact_mensaje.required' => 'El mensaje es obligatorio.',
        ]);

        $item = new ContactUs();
        $item->contact_nombre = $request->contact_nombre;
        $item->contact_apellido = $request->contact_apellido;
        $item->contact_correo = $request->contact_correo;
        $item->contact_mensaje = $request->contact_mensaje;
        $item->user_id = $request->user_id;
        $item->save();
        return redirect()->route('contactUs')->with('success', 'Mensaje enviado correctamente.');
    }
}
