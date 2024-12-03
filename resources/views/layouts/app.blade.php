<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <title>@yield('title', 'Gestión de Usuarios')</title>
</head>

<body class="bg-white" style='font-family: Inter, "Noto Sans", sans-serif;'>
    <div class="relative flex min-h-screen flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="gap-1 px-6 flex flex-1 justify-center py-5">
                <!-- Sidebar -->
                <div class="layout-content-container flex flex-col w-80">
                    <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-4">
                        <div class="flex flex-col gap-4">
                            <h1 class="text-[#111518] text-base font-medium leading-normal">Administrar</h1>
                            <div class="flex flex-col gap-2">
                                <a href="#"
                                    class="flex items-center gap-3 px-3 py-2 text-[#111518] text-sm font-medium leading-normal">Tablero</a>
                                <a href="#"
                                    class="flex items-center gap-3 px-3 py-2 text-[#111518] text-sm font-medium leading-normal">Pedidos</a>
                                <a href="#"
                                    class="flex items-center gap-3 px-3 py-2 text-[#111518] text-sm font-medium leading-normal">Clientes</a>
                                <a href="#"
                                    class="flex items-center gap-3 px-3 py-2 text-[#111518] text-sm font-medium leading-normal">Productos</a>
                                <a href="{{ route('admin.users.index') }}"
                                    class="flex items-center gap-3 px-3 py-2 rounded-xl bg-[#f0f2f5] text-[#111518] text-sm font-medium leading-normal">Usuarios</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content -->
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>
