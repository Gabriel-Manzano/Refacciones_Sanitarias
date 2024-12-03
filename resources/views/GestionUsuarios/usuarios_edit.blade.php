@extends('layouts.app')

@section('content')
    <div class="flex flex-wrap justify-between gap-3 p-4">
        <div class="flex min-w-72 flex-col gap-3">
            <p class="text-[#111518] text-4xl font-black leading-tight tracking-[-0.033em]">Usuarios</p>
            <p class="text-[#60778a] text-base font-normal leading-normal">Administrar usuarios en tu organización</p>
        </div>

        <div class="container mt-5">
            <h1 class="text-center mb-4">Editar Usuario</h1>

            <div class="card shadow-lg">
                <div class="card-body">
                    <form action="{{ route('admin.users.update', $usuario->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Nombre -->
                        <div class="mb-5">
                            <label for="nombre" class="form-label block text-sm font-semibold text-gray-700">Nombre</label>
                            <input type="text" class="form-control w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" id="nombre" name="nombre"
                                value="{{ $usuario->nombre }}" required>
                        </div>

                        <!-- Correo Electrónico -->
                        <div class="mb-5">
                            <label for="correo" class="form-label block text-sm font-semibold text-gray-700">Correo Electrónico</label>
                            <input type="email" class="form-control w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" id="correo" name="correo"
                                value="{{ $usuario->correo }}" required>
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-5">
                            <label for="password" class="form-label block text-sm font-semibold text-gray-700">Contraseña</label>
                            <input type="password" class="form-control w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" id="password" name="password">
                            <small class="form-text text-muted block mt-2">Deja en blanco si no deseas cambiar la contraseña.</small>
                        </div>

                        <!-- Rol -->
                        <div class="mb-5">
                            <label for="rol" class="form-label block text-sm font-semibold text-gray-700">Rol</label>
                            <select class="form-control w-full px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500" id="rol" name="rol" required>
                                <option value="Administrador" {{ $usuario->rol == 'Administrador' ? 'selected' : '' }}>
                                    Administrador</option>
                                <option value="Miembro" {{ $usuario->rol == 'Miembro' ? 'selected' : '' }}>Miembro</option>
                                <option value="Editor" {{ $usuario->rol == 'Editor' ? 'selected' : '' }}>Editor</option>
                                <option value="Gerente" {{ $usuario->rol == 'Gerente' ? 'selected' : '' }}>Gerente</option>
                            </select>
                        </div>

                        <!-- Botones de Acción -->
                        <div class="flex justify-between mt-6">
                            <a href="{{ route('admin.users.index') }}" class="inline-block px-6 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-700">
                                Cancelar
                            </a>
                            <button type="submit" class="inline-block px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                                Actualizar Usuario
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
