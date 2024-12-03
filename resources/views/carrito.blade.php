<html>

<head>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900" />

  <title>Carrito de compras</title>
  <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
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
  <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
    style='font-family: "Work Sans", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
      <header
        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f4] px-10 py-3">
        <div class="flex items-center gap-8">
          <div class="flex items-center gap-4 text-[#111417]">
            <div class="size-4">
            </div>
          </div>
        </div>
        <div class="flex gap-2">
          <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#348de5] text-white text-sm font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Carrito (3)</span>
          </button>
        </div>
      </header>
      <div class="gap-1 px-6 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[920px] flex-1">
          <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#111417] tracking-light text-[32px] font-bold leading-tight min-w-72">Carrito de compras</p>
          </div>
          <div class="flex gap-4 bg-white px-4 py-3 justify-between">
            <div class="flex items-start gap-4">
              <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-[70px]">
                <img class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-[70px]"
                  src="{{ asset('images/Lavabo.jpg') }}" alt="Refacción 1" class="w-full h-48 object-cover">
              </div>
              <div class="flex flex-1 flex-col justify-center">
                <p class="text-[#111417] text-base font-medium leading-normal">Lavabo sobre encimera ovalado para baño
                  de diseño en cerámica</p>
                <p class="text-[#647587] text-sm font-normal leading-normal">$8,497.23</p>
              </div>
            </div>
            <div class="shrink-0">
              <div class="flex items-center gap-2 text-[#111417]">
                <button
                  class="text-base font-medium leading-normal flex h-7 w-7 items-center justify-center rounded-full bg-[#f0f2f4] cursor-pointer">-</button>
                <input
                  class="text-base font-medium leading-normal w-4 p-0 text-center bg-transparent focus:outline-0 focus:ring-0 focus:border-none border-none [appearance:textfield] [&amp;::-webkit-inner-spin-button]:appearance-none [&amp;::-webkit-outer-spin-button]:appearance-none"
                  type="number" value="1" />
                <button
                  class="text-base font-medium leading-normal flex h-7 w-7 items-center justify-center rounded-full bg-[#f0f2f4] cursor-pointer">+</button>
              </div>
            </div>
          </div>
          <div class="flex gap-4 bg-white px-4 py-3 justify-between">
            <div class="flex items-start gap-4">
              <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-[70px]">
                <img class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-[70px]"
                  src="{{ asset('images/Toilet.jpg') }}" alt="Refacción 1" class="w-full h-48 object-cover">
              </div>
              <div class="flex flex-1 flex-col justify-center">
                <p class="text-[#111417] text-base font-medium leading-normal">Sanitario de Cerámica Dica con Asiento
                </p>
                <p class="text-[#647587] text-sm font-normal leading-normal">$2,249.00</p>
              </div>
            </div>
            <div class="shrink-0">
              <div class="flex items-center gap-2 text-[#111417]">
                <button
                  class="text-base font-medium leading-normal flex h-7 w-7 items-center justify-center rounded-full bg-[#f0f2f4] cursor-pointer">-</button>
                <input
                  class="text-base font-medium leading-normal w-4 p-0 text-center bg-transparent focus:outline-0 focus:ring-0 focus:border-none border-none [appearance:textfield] [&amp;::-webkit-inner-spin-button]:appearance-none [&amp;::-webkit-outer-spin-button]:appearance-none"
                  type="number" value="1" />
                <button
                  class="text-base font-medium leading-normal flex h-7 w-7 items-center justify-center rounded-full bg-[#f0f2f4] cursor-pointer">+</button>
              </div>
            </div>
          </div>
          <div class="flex gap-4 bg-white px-4 py-3 justify-between">
            <div class="flex items-start gap-4">
              <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-[70px]">
                <img class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-[70px]"
                  src="{{ asset('images/Tina.jpg') }}" alt="Refacción 1" class="w-full h-48 object-cover">
              </div>
              <div class="flex flex-1 flex-col justify-center">
                <p class="text-[#111417] text-base font-medium leading-normal">Tina de baño Akor con Llave FS001N</p>
                <p class="text-[#647587] text-sm font-normal leading-normal">$6,523.50</p>
              </div>
            </div>
            <div class="shrink-0">
              <div class="flex items-center gap-2 text-[#111417]">
                <button
                  class="text-base font-medium leading-normal flex h-7 w-7 items-center justify-center rounded-full bg-[#f0f2f4] cursor-pointer">-</button>
                <input
                  class="text-base font-medium leading-normal w-4 p-0 text-center bg-transparent focus:outline-0 focus:ring-0 focus:border-none border-none [appearance:textfield] [&amp;::-webkit-inner-spin-button]:appearance-none [&amp;::-webkit-outer-spin-button]:appearance-none"
                  type="number" value="1" />
                <button
                  class="text-base font-medium leading-normal flex h-7 w-7 items-center justify-center rounded-full bg-[#f0f2f4] cursor-pointer">+</button>
              </div>
            </div>
          </div>
          <div class="flex justify-stretch">
            <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 justify-end">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-transparent text-[#111417] text-sm font-bold leading-normal tracking-[0.015em]">
              </button>
            </div>
          </div>
        </div>
        <div class="layout-content-container flex flex-col w-[360px]">
          <h3 class="text-[#111417] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Resumen</h3>
          <div class="p-4">
            <div class="flex justify-between gap-x-6 py-2">
              <p class="text-[#647587] text-sm font-normal leading-normal">Subtotal (3 articulos)</p>
              <p class="text-[#111417] text-sm font-normal leading-normal text-right">$17.269.73</p>
            </div>
            <div class="flex justify-between gap-x-6 py-2">
              <p class="text-[#647587] text-sm font-normal leading-normal">Descuento</p>
              <p class="text-[#111417] text-sm font-normal leading-normal text-right">0%</p>
            </div>
            <div class="flex justify-between gap-x-6 py-2">
              <p class="text-[#647587] text-sm font-normal leading-normal">Envio</p>
              <p class="text-[#111417] text-sm font-normal leading-normal text-right">Gratis</p>
            </div>
            <div class="flex justify-between gap-x-6 py-2">
              <p class="text-[#647587] text-sm font-normal leading-normal">Total</p>
              <p class="text-[#111417] text-sm font-normal leading-normal text-right">$17.269.73</p>
            </div>
          </div>
          <div class="flex px-4 py-3">
            <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 flex-1 bg-[#348de5] text-white text-sm font-bold leading-normal tracking-[0.015em]">
              <span class="truncate">Pagar</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>