<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tienda de Refacciones Sanitarias</title>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900"
  />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f0f2f5]">
  <!-- Encabezado -->
  <header class="bg-[#111518] text-white py-4">
    <div class="container mx-auto flex justify-between items-center px-4">
      <h1 class="text-2xl font-bold">Refacciones Sanitarias</h1>
      <nav>
        <a href="#catalogo" class="text-white hover:underline">Inicio</a>
        <a href="#contacto" class="text-white hover:underline ml-4">Contacto</a>
        <a href="#carrito" class="text-white hover:underline ml-4">Carrito</a>
      </nav>
    </div>
  </header>

  <!-- Catálogo -->
  <main id="catalogo" class="container mx-auto py-8 px-4">
    <h2 class="text-3xl font-bold text-[#111518] text-center mb-6">Catálogo de Productos</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
      <!-- Producto -->
      <div class="bg-white shadow-lg rounded-xl overflow-hidden">
        <img src="https://via.placeholder.com/300x200" alt="Refacción 1" class="w-full h-48 object-cover" />
        <div class="p-6">
          <h3 class="text-lg font-bold text-[#111518]">Refacción 1</h3>
          <p class="text-sm text-[#60778a] mt-2">Descripción breve del producto.</p>
          <div class="flex justify-between items-center mt-4">
            <span class="text-[#111518] font-bold">$100.00</span>
            <button
              class="bg-[#111518] text-white px-4 py-2 rounded-xl text-sm hover:bg-[#2d2f33] transition-colors"
              onclick="alert('Producto agregado al carrito')"
            >
              Agregar
            </button>
          </div>
        </div>
      </div>

      <!-- Copiar esta estructura para más productos -->
      <div class="bg-white shadow-lg rounded-xl overflow-hidden">
        <img src="https://via.placeholder.com/300x200" alt="Refacción 2" class="w-full h-48 object-cover" />
        <div class="p-6">
          <h3 class="text-lg font-bold text-[#111518]">Refacción 2</h3>
          <p class="text-sm text-[#60778a] mt-2">Descripción breve del producto.</p>
          <div class="flex justify-between items-center mt-4">
            <span class="text-[#111518] font-bold">$150.00</span>
            <button
              class="bg-[#111518] text-white px-4 py-2 rounded-xl text-sm hover:bg-[#2d2f33] transition-colors"
              onclick="alert('Producto agregado al carrito')"
            >
              Agregar
            </button>
          </div>
        </div>
      </div>

      <!-- Ejemplo de otro producto -->
      <div class="bg-white shadow-lg rounded-xl overflow-hidden">
        <img src="https://via.placeholder.com/300x200" alt="Refacción 3" class="w-full h-48 object-cover" />
        <div class="p-6">
          <h3 class="text-lg font-bold text-[#111518]">Refacción 3</h3>
          <p class="text-sm text-[#60778a] mt-2">Descripción breve del producto.</p>
          <div class="flex justify-between items-center mt-4">
            <span class="text-[#111518] font-bold">$200.00</span>
            <button
              class="bg-[#111518] text-white px-4 py-2 rounded-xl text-sm hover:bg-[#2d2f33] transition-colors"
              onclick="alert('Producto agregado al carrito')"
            >
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
        <a href="mailto:soporte@refaccionessanitarias.com" class="text-blue-400 hover:underline">soporte@refaccionessanitarias.com</a>
      </p>
    </div>
  </footer>
</body>
</html>
