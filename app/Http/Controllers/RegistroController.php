<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|string|email|max:255|unique:usuarios,correo',
            'contraseña' => 'required|string|min:8|confirmed', // Confirmed para validar contra "contraseña_confirmation"
        ]);

        // Crear el usuario
        $usuario = new Usuario();
        $usuario->nombre = $validatedData['nombre'];
        $usuario->correo = $validatedData['correo'];
        $usuario->contraseña = Hash::make($validatedData['contraseña']); // Encriptar contraseña
        $usuario->rol = 'usuario'; // Asignar rol por defecto
        $usuario->save();

        // Redirigir o responder
        return redirect()->route('login')->with('success', '¡Cuenta creada exitosamente! Inicia sesión para continuar.');

    }
}
