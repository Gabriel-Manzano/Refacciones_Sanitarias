<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        // Retorna la vista del formulario de login
        return view('profile.partials.login');
    }

    public function login(Request $request)
    {
        // Validar los datos ingresados
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar al usuario
        $user = User::where('email', $request->email)->first();

        // Validar credenciales
        if ($user && Hash::check($request->password, $user->password)) {
            // Iniciar sesión del usuario manualmente
            session(['user_id' => $user->id, 'role' => $user->role]); // Guardar datos en sesión

            // Redirigir según el rol del usuario
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        }

        // Si las credenciales no son válidas
        return back()->withErrors(['email' => 'Credenciales incorrectas.'])->withInput();
    }

    public function logout()
    {
        // Cerrar sesión manualmente
        session()->flush(); // Eliminar todos los datos de la sesión

        return redirect()->route('login');
    }
}
