<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $usuarios = Usuario::query()
            ->where('correo', 'like', "%$search%")
            ->orWhere('nombre', 'like', "%$search%")
            ->orWhere('rol', 'like', "%$search%")
            ->get();

        return view('GestionUsuarios.gestionUser', compact('usuarios'));
    }

    public function create()
    {
        return view('GestionUsuarios.UsuariosCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:usuarios,correo',
            'password' => 'required|string|min:8',
            'rol' => 'required|in:Administrador,Miembro,Editor',
        ]);

        Usuario::create([
            'correo' => $request->correo,
            'contraseña' => bcrypt($request->contraseña),
            'nombre' => $request->nombre,
            'rol' => $request->rol,
        ]);

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito.');

    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);

        return view('GestionUsuarios.usuarios_edit', compact('usuario'));
    }


    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'correo' => 'required|email|unique:usuarios,correo,' . $usuario->id,
            'nombre' => 'required|string',
            'rol' => 'required|string',
        ]);

        $usuario->update($request->only('correo', 'nombre', 'rol'));

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
    }
}
