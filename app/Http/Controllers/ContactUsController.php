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
            'contact_correo' => 'required|email',
            'contact_mensaje' => 'required|string',
            'user_id' => 'required|exists:users,id',
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
