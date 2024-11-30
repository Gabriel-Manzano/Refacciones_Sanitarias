<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        Usuario::create([
            'correo' => 'admin@example.com',
            'contraseña' => 'EstosUserSonPruebas',
            'nombre' => 'Admin User',
            'rol' => 'Administrador',
        ]);

        Usuario::create([
            'correo' => 'usuario1@example.com',
            'contraseña' => '!23443567',
            'nombre' => 'Juan Pérez',
            'rol' => 'Miembro',
        ]);

        Usuario::create([
            'correo' => 'usuario2@example.com',
            'contraseña' => 'Conttraseñajajs',
            'nombre' => 'Ana López',
            'rol' => 'Miembro',
        ]);

        Usuario::create([
            'correo' => 'gerente@example.com',
            'contraseña' => 'EspecialistForGodItems',
            'nombre' => 'Gerente Uno',
            'rol' => 'Gerente',
        ]);

        Usuario::create([
            'correo' => 'editor@example.com',
            'contraseña' => 'Escandalo',
            'nombre' => 'Editor Uno',
            'rol' => 'Editor',
        ]);
    }
}
