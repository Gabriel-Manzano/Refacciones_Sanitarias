<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tienda de Refacciones Sanitarias</title>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f0f2f5] flex flex-col min-h-screen">
  <!-- Encabezado -->
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

  <!-- Contenido Principal -->
  <main id="catalogo" class="container mx-auto py-8 px-4 flex-grow">
    <h2 class="text-3xl font-bold text-[#111518] text-center mb-6">Catálogo de Productos</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      <!-- Productos -->
      <div class="bg-white shadow-lg rounded-xl overflow-hidden">
        <img src="{{ asset('images/Lavabo.jpg') }}" alt="Refacción 1" class="w-full h-48 object-cover" />
        <div class="p-6">
          <h3 class="text-lg font-bold text-[#111518]">Lavabo sobre encimera ovalado para baño de diseño en cerámica</h3>
          <div class="flex justify-between items-center mt-4">
            <span class="text-[#111518] font-bold">$8,497.23</span>
            <button class="bg-[#111518] text-white px-4 py-2 rounded-xl text-sm hover:bg-[#2d2f33] transition-colors"
              onclick="alert('Producto agregado al carrito')">
              Agregar
            </button>
          </div>
        </div>
      </div>
          <!-- Producto 2 -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden">
      <img src="{{ asset('images/Toilet.jpg') }}" alt="Refacción 1" class="w-full h-48 object-cover" />
      <div class="p-6">
        <h3 class="text-lg font-bold text-[#111518]">Sanitario de Cerámica Dica con Asiento</h3>
        <div class="flex justify-between items-center mt-4">
          <span class="text-[#111518] font-bold">$2,249.00</span>
          <button class="bg-[#111518] text-white px-4 py-2 rounded-xl text-sm hover:bg-[#2d2f33] transition-colors"
            onclick="alert('Producto agregado al carrito')">
            Agregar
          </button>
        </div>
      </div>
    </div>
    <!-- Producto 3 -->
    <div class="bg-white shadow-lg rounded-xl overflow-hidden">
      <img src="{{ asset('images/Tina.jpg') }}" alt="Refacción 1" class="w-full h-48 object-cover" />
      <div class="p-6">
        <h3 class="text-lg font-bold text-[#111518]">Tina de baño Akor con Llave FS001N</h3>
        <div class="flex justify-between items-center mt-4">
          <span class="text-[#111518] font-bold">$6,523.50</span>
          <button class="bg-[#111518] text-white px-4 py-2 rounded-xl text-sm hover:bg-[#2d2f33] transition-colors"
            onclick="alert('Producto agregado al carrito')">
            Agregar
          </button>
        </div>
      </div>
    </div>
    </div>
  </main>

  <!-- Footer -->
  <footer id="contacto" class="bg-[#111518] text-white py-6">
    <div class="container mx-auto text-center">
      <p class="text-sm">
        © 2024 Refacciones Sanitarias. Todos los derechos reservados. Contacto:
        <a href="mailto:soporte@refaccionessanitarias.com"
          class="text-blue-400 hover:underline">soporte@refaccionessanitarias.com</a>
      </p>
    </div>
  </footer>
</body>

</html>

