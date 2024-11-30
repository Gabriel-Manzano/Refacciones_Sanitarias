@extends('layouts.app')

@section('title', 'Gestión de Usuarios')

@section('content')
    <div class="flex flex-wrap justify-between gap-3 p-4">
        <div class="flex min-w-72 flex-col gap-3">
            <p class="text-[#111518] text-4xl font-black leading-tight tracking-[-0.033em]">Usuarios</p>
            <p class="text-[#60778a] text-base font-normal leading-normal">Administrar usuarios en tu organización</p>
        </div>
        @if (session('success'))
            <div class="mb-4 bg-green-100 text-green-700 p-3 rounded">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('usuarios.create') }}"
            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xl px-6 py-3 text-center">
            Crear Usuario
        </a>


        <div class="px-4 py-3">
            <form method="GET" action="{{ route('usuarios.index') }}">
                <label class="flex flex-col min-w-40 h-12 w-full">
                    <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
                        <div class="text-[#60778a] flex border-none bg-[#f0f2f5] items-center justify-center pl-4 rounded-l-xl border-r-0"
                            data-icon="MagnifyingGlass" data-size="24px" data-weight="regular">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                                viewBox="0 0 256 256">
                                <path
                                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                                </path>
                            </svg>
                        </div>
                        <input name="search" placeholder="Buscar usuarios por correo electrónico"
                            value="{{ request('search') }}"
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111518] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-full placeholder:text-[#60778a] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" />
                    </div>
                </label>
            </form>
        </div>

        <div class="px-4 py-3">
            <div class="flex overflow-hidden rounded-xl border border-[#dbe1e6] bg-white">
                <table class="flex-1">
                    <thead>
                        <tr class="bg-white">
                            <th
                                class="table-column-120 px-4 py-3 text-left text-[#111518] w-[400px] text-sm font-medium leading-normal">
                                Correo Electrónico
                            </th>
                            <th
                                class="table-column-240 px-4 py-3 text-left text-[#111518] w-[400px] text-sm font-medium leading-normal">
                                Nombre
                            </th>
                            <th
                                class="table-column-480 px-4 py-3 text-left text-[#111518] w-60 text-[#60778a] text-sm font-medium leading-normal">
                                Rol
                            </th>
                            <th
                                class="table-column-480 px-4 py-3 text-left text-[#111518] w-60 text-[#60778a] text-sm font-medium leading-normal">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr class="border-t border-t-[#dbe1e6]">
                                <td
                                    class="table-column-120 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                                    {{ $usuario->correo }}
                                </td>
                                <td
                                    class="table-column-240 h-[72px] px-4 py-2 w-[400px] text-[#111518] text-sm font-normal leading-normal">
                                    {{ $usuario->nombre }}
                                </td>
                                <td
                                    class="table-column-240 h-[72px] px-4 py-2 w-[400px] text-[#60778a] text-sm font-normal leading-normal">
                                    {{ $usuario->rol }}
                                </td>
                                <td
                                    class="table-column-480 h-[72px] px-4 py-2 w-60 text-[#60778a] text-sm font-bold leading-normal tracking-[0.015em]">
                                    <!-- Botones de acción -->
                                    <a href="{{ route('usuarios.edit', $usuario->id) }}"
                                        class="text-blue-500 hover:text-blue-700 px-3 py-2 rounded-xl">Actualizar</a>
                                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-red-500 hover:text-red-700 px-3 py-2 rounded-xl">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @endsection
