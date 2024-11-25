<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index() {
        return view("modules/auth/login");
    }

    public function registro() {
        return view("modules/auth/registro");
    }

    public function registrar(Request $request) {

        $request->validate([
            'name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:2',
        ],
        [
            'name.required' => 'El nombre es obligatorio.',
            'last_name.required' => 'El apellido es obligatorio.',
            'email.required' => 'El correo es obligatorio.',
            'email.email' => 'El correo debe ser una dirección válida.',
            'email.unique' => 'El correo ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 2 caracteres.',
        ]);

        $item = new User();
        $item->name = $request->name;
        $item->last_name = $request->last_name;
        $item->email = $request->email;
        $item->password = Hash::make($request->password);
        $item->save();
        return to_route('login');
    }

    public function logear(Request $request) {
        $credenciales = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credenciales)){
            return to_route('home');
        } else{
            return to_route('login');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return to_route('login');
    }

    public function home() {
        return view("modules/dashboard/home");
    }
}

?>
