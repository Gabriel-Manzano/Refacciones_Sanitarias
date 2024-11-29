<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link
    rel="stylesheet"
    as="style"
    onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
  />
  <title>Login - Galileo Diseño</title>
  <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>
<body>
  <div class="relative flex min-h-screen items-center justify-center bg-[#f0f2f5]">
    <div class="flex flex-col w-full max-w-md bg-white rounded-xl p-6 shadow-lg">
      <h2 class="text-2xl font-bold text-[#111518] text-center mb-6">Iniciar Sesión</h2>
      <form class="flex flex-col gap-4">
        <!-- Campo de Correo Electrónico -->
        <label class="flex flex-col gap-2">
          <span class="text-sm font-medium text-[#111518]">Correo Electrónico</span>
          <input
            type="email"
            placeholder="ejemplo@correo.com"
            class="form-input px-4 py-2 rounded-xl bg-[#f0f2f5] border-none text-[#111518] placeholder:text-[#60778a] focus:ring-2 focus:ring-[#111518]"
            required
          />
        </label>
        <!-- Campo de Contraseña -->
        <label class="flex flex-col gap-2">
          <span class="text-sm font-medium text-[#111518]">Contraseña</span>
          <input
            type="password"
            placeholder="••••••••"
            class="form-input px-4 py-2 rounded-xl bg-[#f0f2f5] border-none text-[#111518] placeholder:text-[#60778a] focus:ring-2 focus:ring-[#111518]"
            required
          />
        </label>
        <!-- Botón de Enviar -->
        <button
          type="submit"
          class="py-2 rounded-xl bg-[#111518] text-white font-medium text-base hover:bg-[#2d2f33] transition-colors"
        >
          Iniciar Sesión
        </button>
      </form>
    </div>
  </div>
</body>
</html>
