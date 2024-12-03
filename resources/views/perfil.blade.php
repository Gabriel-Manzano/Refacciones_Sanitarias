<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Manrope%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />

  <title>Perfil usuario</title>
  <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body class="bg-gray-100 text-gray-800 font-sans">
  <!-- Header -->
  <header class="bg-[#111518] text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
      <h1 class="text-2xl font-bold">Refacciones Sanitarias</h1>
      <nav>
        <a href="{{ route('rutainicio') }}" class="text-white hover:underline">Inicio</a>
        <a href="{{ route('rutaperfil') }}" class="text-white hover:underline ml-4">Perfil</a>
        <a href="{{ route('rutacarrito') }}" class="text-white hover:underline ml-4">Carrito</a>
      </nav>
      <form action="{{ route('logout') }}" method="POST" class="mt-4 text-center">
        @csrf
        <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
      </form>
    </div>
  </header>

  <!-- Content -->
  <main class="container mx-auto p-6">
    <!-- Profile Section -->
    <section class="bg-white rounded-lg shadow-md p-6 text-center">
      <div class="flex flex-col items-center gap-4">
        <div class="w-0 h-0 rounded-full bg-cover bg-center"
          style="background-image: url('https://cdn.usegalileo.ai/sdxl10/3df97505-4f2f-4f33-91b6-08f2995d3102.png');">
        </div>
        <h2 class="text-xl font-bold">Pablo Hernán</h2>
        <p class="text-gray-600">Pablo_Hernan@gmail.com</p>
      </div>
    </section>

    <!-- Orders Section -->
    <section class="mt-8">
      <h3 class="text-lg font-bold mb-4">Productos comprados</h3>
      <div class="space-y-4">
        <div class="flex items-center gap-4 bg-white p-4 rounded-lg shadow-md">
            <p class="font-medium">Orden #1234567890</p>
            <p class="text-gray-600">En proceso</p>
          </div>
        </div>
        <div class="flex items-center gap-4 bg-white p-4 rounded-lg shadow-md">
            <p class="font-medium">Orden #0987654321</p>
            <p class="text-gray-600">Entregado</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Saved Items Section -->
    <section class="mt-8">
      <h3 class="text-lg font-bold mb-4">Productos guardados</h3>
      <div class="space-y-4">
        <div class="flex items-center gap-4 bg-white p-4 rounded-lg shadow-md">
          <div class="h-14 w-14 rounded-lg bg-cover bg-center"
            style="background-image: url('https://cdn.usegalileo.ai/stability/c341a051-b093-4193-92f2-132ca83ca016.png');"></div>
          <div>
            <p class="font-medium">Tina de baño</p>
            <p class="text-gray-600">Blanco</p>
          </div>
        </div>
        <!-- Repeat for other saved items -->
      </div>
    </section>

    <!-- Address Section -->
    <section class="mt-8">
      <h3 class="text-lg font-bold mb-4">Dirección</h3>
      <div class="space-y-4">
        <div class="flex items-center gap-4 bg-white p-4 rounded-lg shadow-md">
          <div class="flex items-center justify-center w-12 h-12 bg-gray-200 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="currentColor"
              viewBox="0 0 256 256">
              <path
                d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z">
              </path>
            </svg>
          </div>
          <div>
            <p class="font-medium">Prol. Bernardo Quintana 526-Primer Piso, Arboledas, 76140 Santiago de Querétaro, Qro.</p>
            <p class="text-gray-600">Pablo Hernán</p>
          </div>
        </div>
        <!-- Repeat for other addresses -->
      </div>
    </section>
  </main>
</body>

</html>
