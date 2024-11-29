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
  <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
    style='font-family: "Work Sans", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
      <header
        class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#f0f2f4] px-10 py-3">
        <div class="flex items-center gap-8">
          <div class="flex items-center gap-4 text-[#111417]">
            <div class="size-4">
              <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 6H42L36 24L42 42H6L12 24L6 6Z" fill="currentColor"></path>
              </svg>
            </div>
            <h2 class="text-[#111417] text-lg font-bold leading-tight tracking-[-0.015em]">Refacciones Sanitarias</h2>
          </div>
          <label class="flex flex-col min-w-40 !h-10 max-w-64">
            <div class="flex w-full flex-1 items-stretch rounded-xl h-full">
              <div
                class="text-[#647587] flex border-none bg-[#f0f2f4] items-center justify-center pl-4 rounded-l-xl border-r-0"
                data-icon="MagnifyingGlass" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                  viewBox="0 0 256 256">
                  <path
                    d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                  </path>
                </svg>
              </div>
              <input placeholder="Buscar"
                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#111417] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f4] focus:border-none h-full placeholder:text-[#647587] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                value="" />
            </div>
          </label>
        </div>
        <div class="flex gap-2">
          <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#348de5] text-white text-sm font-bold leading-normal tracking-[0.015em]">
            <span class="truncate">Carrito (3)</span>
          </button>
          <button
            class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-[#f0f2f4] text-[#111417] gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">
            <div class="text-[#111417]" data-icon="User" data-size="20px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z">
                </path>
              </svg>
            </div>
          </button>
        </div>
      </header>
      <div class="gap-1 px-6 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col max-w-[920px] flex-1">
          <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#111417] tracking-light text-[32px] font-bold leading-tight min-w-72">Shopping Cart</p>
          </div>
          <div class="flex gap-4 bg-white px-4 py-3 justify-between">
            <div class="flex items-start gap-4">
              <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-[70px]"
                style='background-image: url("https://cdn.usegalileo.ai/stability/265e952a-99fe-4228-a864-311bdf109f4d.png");'>
              </div>
              <div class="flex flex-1 flex-col justify-center">
                <p class="text-[#111417] text-base font-medium leading-normal">Toilet</p>
                <p class="text-[#647587] text-sm font-normal leading-normal">$100.00</p>
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
              <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-[70px]"
                style='background-image: url("https://cdn.usegalileo.ai/stability/66f43851-ef50-4376-81f0-2f5009cb8f5c.png");'>
              </div>
              <div class="flex flex-1 flex-col justify-center">
                <p class="text-[#111417] text-base font-medium leading-normal">Toilet</p>
                <p class="text-[#647587] text-sm font-normal leading-normal">$100.00</p>
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
              <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-lg size-[70px]"
                style='background-image: url("https://cdn.usegalileo.ai/stability/15544aa6-01b8-4345-b0ff-fa8efc937c1e.png");'>
              </div>
              <div class="flex flex-1 flex-col justify-center">
                <p class="text-[#111417] text-base font-medium leading-normal">Toilet</p>
                <p class="text-[#647587] text-sm font-normal leading-normal">$100.00</p>
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
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 px-4 bg-[#f0f2f4] text-[#111417] text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Actualizar Carrito</span>
              </button>
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
              <p class="text-[#111417] text-sm font-normal leading-normal text-right">$300.00</p>
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
              <p class="text-[#111417] text-sm font-normal leading-normal text-right">$300.00</p>
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