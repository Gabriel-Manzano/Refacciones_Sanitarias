<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />
  <title>Iniciar Sesión - Galileo Diseño</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
  <div class="relative flex min-h-screen items-center justify-center bg-[#f0f2f5]">
    <div class="flex flex-col w-full max-w-lg bg-white rounded-xl p-6 shadow-lg">
      <h2 class="text-2xl font-bold text-[#111518] text-center mb-6">Iniciar Sesión</h2>
      
      <!-- Alerta de éxito -->
      @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert">
          <span class="text-green-500">×</span>
        </button>
      </div>
      @endif
      
      <!-- Alerta de errores -->
      @if ($errors->any())
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      
      <form class="flex flex-col gap-4" action="{{ route('login.process') }}" method="POST">
        @csrf
        <!-- Campo de Correo Electrónico -->
        <label class="flex flex-col gap-2">
          <span class="text-sm font-medium text-[#111518]">Correo Electrónico</span>
          <input name="email" type="email" placeholder="ejemplo@correo.com"
            class="form-input px-4 py-2 rounded-xl bg-[#f0f2f5] border-none text-[#111518] placeholder:text-[#60778a] focus:ring-2 focus:ring-[#111518]"
            required />
        </label>
        
        <!-- Campo de Contraseña -->
        <label class="flex flex-col gap-2">
          <span class="text-sm font-medium text-[#111518]">Contraseña</span>
          <input name="password" type="password" placeholder="Ingresa tu contraseña"
            class="form-input px-4 py-2 rounded-xl bg-[#f0f2f5] border-none text-[#111518] placeholder:text-[#60778a] focus:ring-2 focus:ring-[#111518]"
            required />
        </label>
        
        <!-- Botón de Iniciar Sesión -->
        <button type="submit"
          class="py-2 rounded-xl bg-[#111518] text-white font-medium text-base hover:bg-[#2d2f33] transition-colors">
          Iniciar Sesión
        </button>
      </form>
      
      <!-- Enlace para registrarse -->
      <p class="text-sm text-center text-[#60778a] mt-4">
        ¿Aún no tienes cuenta? <a href="{{ route('rutaregistro') }}" class="text-[#111518] font-medium hover:underline">Registrarse</a>
      </p>
    </div>
  </div>
</body>

</html>
