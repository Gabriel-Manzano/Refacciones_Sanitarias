<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run()
    {

        Usuario::create([
            'correo' => 'admin@example.com',
            'contraseña' => Hash::make('EstosUserSonPruebas'),
            'nombre' => 'Admin User',
            'rol' => 'Administrador',
        ]);

        Usuario::create([
            'correo' => 'usuario1@example.com',
            'contraseña' => Hash::make('!23443567'),
            'nombre' => 'Juan Pérez',
            'rol' => 'Miembro',
        ]);

        Usuario::create([
            'correo' => 'usuario2@example.com',
            'contraseña' => Hash::make('Conttraseñajajs'),
            'nombre' => 'Ana López',
            'rol' => 'Miembro',
        ]);

        Usuario::create([
            'correo' => 'gerente@example.com',
            'contraseña' => Hash::make('EspecialistForGodItems'),
            'nombre' => 'Gerente Uno',
            'rol' => 'Gerente',
        ]);

        Usuario::create([
            'correo' => 'editor@example.com',
            'contraseña' => Hash::make('Escandalo'),
            'nombre' => 'Editor Uno',
            'rol' => 'Editor',
        ]);

    }
}
