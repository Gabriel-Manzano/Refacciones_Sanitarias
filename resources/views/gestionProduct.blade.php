<html>

<head>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />

  <title>Galileo Diseño</title>
  <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
  <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
    style='font-family: Inter, "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
      <header
        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f5] px-10 py-3">
        <div class="flex items-center gap-4 text-[#111518]">
          <div class="size-4">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M12.0799 24L4 19.2479L9.95537 8.75216L18.04 13.4961L18.0446 4H29.9554L29.96 13.4961L38.0446 8.75216L44 19.2479L35.92 24L44 28.7521L38.0446 39.2479L29.96 34.5039L29.9554 44H18.0446L18.04 34.5039L9.95537 39.2479L4 28.7521L12.0799 24Z"
                fill="currentColor"></path>
            </svg>
          </div>
          <h2 class="text-[#111518] text-lg font-bold leading-tight tracking-[-0.015em]">Refacciones Sanitarias Co.</h2>
        </div>
        <div class="flex flex-1 justify-end gap-8">
          <label class="flex flex-col min-w-40 !h-10 max-w-64">
            <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
              <div
                class="text-[#60778a] flex border-none bg-[#f0f2f5] items-center justify-center pl-4 rounded-l-xl border-r-0"
                data-icon="MagnifyingGlass" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                  viewBox="0 0 256 256">
                  <path
                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                  </path>
                </svg>
              </div>
              <input placeholder="Buscar"
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111518] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-full placeholder:text-[#60778a] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                value="" />
            </div>
          </label>
          <div class="flex gap-2">
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-[#f0f2f5] text-[#111518] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
              Buscar
            </button>
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-[#f0f2f5] text-[#111518] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
              Notificaciones
            </button>
            <button
              class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-[#f0f2f5] text-[#111518] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
              Perfil
            </button>
          </div>
          <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
            style='background-image: url("https://cdn.usegalileo.ai/sdxl10/db560628-8ffe-4cad-808c-a1d6a6259e17.png");'>
          </div>
        </div>
      </header>
      <div class="gap-1 px-6 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col w-80">
          <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-4">
            <div class="flex flex-col gap-4">
              <div class="flex gap-3">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/55bc7632-52fb-4e16-93f0-e0091162550b.png");'>
                </div>
                <h1 class="text-[#111518] text-base font-medium leading-normal">Refacciones Sanitarias Co.</h1>
              </div>
              <div class="flex flex-col gap-2">
                <div class="flex items-center gap-3 px-3 py-2">
                  <div class="text-[#111518]">Tablero</div>
                </div>
                <div class="flex items-center gap-3 px-3 py-2 rounded-xl bg-[#f0f2f5]">
                  <p class="text-[#111518] text-sm font-medium leading-normal">Productos</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <p class="text-[#111518] text-sm font-medium leading-normal">Pedidos</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <p class="text-[#111518] text-sm font-medium leading-normal">Clientes</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <p class="text-[#111518] text-sm font-medium leading-normal">Marketing</p>
                </div>
              </div>
            </div>
            <div class="flex flex-col gap-4">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#2094f3] text-white text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Agregar Producto</span>
              </button>
              <div class="flex flex-col gap-1">
                <div class="flex items-center gap-3 px-3 py-2">
                  <p class="text-[#111518] text-sm font-medium leading-normal">Configuraciones</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <p class="text-[#111518] text-sm font-medium leading-normal">Ayuda y Soporte</p>
                </div>
              </div>
            </div>
          </div>
        </div>