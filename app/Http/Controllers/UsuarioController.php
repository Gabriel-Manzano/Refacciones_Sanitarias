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

        return view('usuarios.gestionUsers', compact('usuarios'));
    }



    public function create()
    {
        return view('usuarios.UsuariosCreate');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:usuarios,correo',
            'contraseña' => 'required|string|min:8',
            'rol' => 'required|in:Administrador,Miembro,Editor',
        ]);

        Usuario::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'contraseña' => bcrypt($request->contraseña), // Encripta la contraseña
            'rol' => $request->rol,
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Usuario creado con éxito.');
    }



    public function edit($id)
    {
        // Busca al usuario por ID
        $usuario = Usuario::findOrFail($id);

        // Devuelve una vista para editar al usuario
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

        return redirect()->route('admin.users.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy($id)
    {
        // Busca al usuario por ID
        $usuario = Usuario::findOrFail($id);
    
        // Elimina el usuario
        $usuario->delete();
    
        // Redirige a la lista de usuarios con un mensaje de éxito
        return redirect()->route('admin.users.index')->with('success', 'Usuario eliminado exitosamente.');
    }
    
}
