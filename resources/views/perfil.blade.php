<html>

<head>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Manrope%3Awght%40400%3B500%3B700%3B800&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" />

  <title>Perfil usuario</title>
  <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
  <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden"
    style='font-family: Manrope, "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
      <div class="gap-1 px-6 flex flex-1 justify-center py-5">
        <div class="layout-content-container flex flex-col w-80">
          <div class="flex h-full min-h-[700px] flex-col justify-between bg-white p-4">
            <div class="flex flex-col gap-4">
              <h1 class="text-[#111418] text-base font-medium leading-normal">Account</h1>
              <div class="flex flex-col gap-2">
                <div class="flex items-center gap-3 px-3 py-2 rounded-xl bg-[#f0f2f4]">
                  <p class="text-[#111418] text-sm font-medium leading-normal">Profile</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <p class="text-[#111418] text-sm font-medium leading-normal">Orders</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <p class="text-[#111418] text-sm font-medium leading-normal">Saved items</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <p class="text-[#111418] text-sm font-medium leading-normal">Addresses</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <p class="text-[#111418] text-sm font-medium leading-normal">Payment methods</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <p class="text-[#111418] text-sm font-medium leading-normal">Settings</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
          <div class="flex p-4 @container">
            <div class="flex w-full flex-col gap-4 @[520px]:flex-row @[520px]:justify-between">
              <div class="flex gap-4">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-xl min-h-32 w-32"
                  style='background-image: url("https://cdn.usegalileo.ai/sdxl10/3df97505-4f2f-4f33-91b6-08f2995d3102.png");'>
                </div>
                <div class="flex flex-col">
                  <p class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em]">Maggie Smith</p>
                  <p class="text-[#637588] text-base font-normal leading-normal">maggiesmith@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
          <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Profile</h3>
          <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2 justify-between">
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Email</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">maggiesmith@gmail.com</p>
            </div>
            <div class="shrink-0">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f0f2f4] text-[#111418] text-sm font-medium leading-normal w-fit">
                <span class="truncate">Change</span>
              </button>
            </div>
          </div>
          <div class="flex items-center gap-4 bg-white px-4 min-h-14 justify-between">
            <p class="text-[#111418] text-base font-normal leading-normal flex-1 truncate">Password</p>
            <div class="shrink-0">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#f0f2f4] text-[#111418] text-sm font-medium leading-normal w-fit">
                <span class="truncate">Change</span>
              </button>
            </div>
          </div>
          <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Orders</h3>
          <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/bca6c6d1-edf6-4d64-8e2d-6b1d48438e35.png");'>
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Order #1234567890</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Shipped</p>
            </div>
          </div>
          <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-14 w-fit"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/f3e386be-69f6-4aab-bce5-b8d9dfffbd90.png");'>
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Order #0987654321</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Delivered</p>
            </div>
          </div>
          <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Saved items</h3>
          <div class="flex items-center gap-4 bg-white px-4 py-3">
            <div class="bg-center bg-no-repeat aspect-video bg-cover rounded-lg h-14 w-fit"
              style='background-image: url("https://cdn.usegalileo.ai/stability/c341a051-b093-4193-92f2-132ca83ca016.png");'>
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Bathroom Sink</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">White</p>
            </div>
          </div>
          <div class="flex items-center gap-4 bg-white px-4 py-3">
            <div class="bg-center bg-no-repeat aspect-video bg-cover rounded-lg h-14 w-fit"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/6e2c4062-e9c3-4770-bf45-097209acc410.png");'>
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Toilet Paper Holder</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Chrome</p>
            </div>
          </div>
          <div class="flex items-center gap-4 bg-white px-4 py-3">
            <div class="bg-center bg-no-repeat aspect-video bg-cover rounded-lg h-14 w-fit"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/17f7f60e-7c16-4a43-8fbd-9eb73671e6f0.png");'>
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Towel Bar</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Brushed Nickel</p>
            </div>
          </div>
          <div class="flex items-center gap-4 bg-white px-4 py-3">
            <div class="bg-center bg-no-repeat aspect-video bg-cover rounded-lg h-14 w-fit"
              style='background-image: url("https://cdn.usegalileo.ai/sdxl10/a9599a0e-f2fe-499d-a0e9-499178b72f7a.png");'>
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Robe Hook</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Polished Brass</p>
            </div>
          </div>
          <div class="flex items-center gap-4 bg-white px-4 py-3">
            <div class="bg-center bg-no-repeat aspect-video bg-cover rounded-lg h-14 w-fit"
              style='background-image: url("https://cdn.usegalileo.ai/stability/62f1c921-3b79-48b0-9203-044cbe8ef495.png");'>
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Shower Head</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Black</p>
            </div>
          </div>
          <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Address</h3>
          <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
            <div class="text-[#111418] flex items-center justify-center rounded-lg bg-[#f0f2f4] shrink-0 size-12"
              data-icon="HouseSimple" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z">
                </path>
              </svg>
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">123 Main St</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">Maggie Smith</p>
            </div>
          </div>
          <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
            <div class="text-[#111418] flex items-center justify-center rounded-lg bg-[#f0f2f4] shrink-0 size-12"
              data-icon="Globe" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM101.63,168h52.74C149,186.34,140,202.87,128,215.89,116,202.87,107,186.34,101.63,168ZM98,152a145.72,145.72,0,0,1,0-48h60a145.72,145.72,0,0,1,0,48ZM40,128a87.61,87.61,0,0,1,3.33-24H81.79a161.79,161.79,0,0,0,0,48H43.33A87.61,87.61,0,0,1,40,128ZM154.37,88H101.63C107,69.66,116,53.13,128,40.11,140,53.13,149,69.66,154.37,88Zm19.84,16h38.46a88.15,88.15,0,0,1,0,48H174.21a161.79,161.79,0,0,0,0-48Zm32.16-16H170.94a142.39,142.39,0,0,0-20.26-45A88.37,88.37,0,0,1,206.37,88ZM105.32,43A142.39,142.39,0,0,0,85.06,88H49.63A88.37,88.37,0,0,1,105.32,43ZM49.63,168H85.06a142.39,142.39,0,0,0,20.26,45A88.37,88.37,0,0,1,49.63,168Zm101.05,45a142.39,142.39,0,0,0,20.26-45h35.43A88.37,88.37,0,0,1,150.68,213Z">
                </path>
              </svg>
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">United States</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">San Francisco, CA 94105</p>
            </div>
          </div>
          <div class="flex items-center gap-4 bg-white px-4 min-h-[72px] py-2">
            <div class="text-[#111418] flex items-center justify-center rounded-lg bg-[#f0f2f4] shrink-0 size-12"
              data-icon="Phone" data-size="24px" data-weight="regular">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                viewBox="0 0 256 256">
                <path
                  d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z">
                </path>
              </svg>
            </div>
            <div class="flex flex-col justify-center">
              <p class="text-[#111418] text-base font-medium leading-normal line-clamp-1">Mobile</p>
              <p class="text-[#637588] text-sm font-normal leading-normal line-clamp-2">6503943857</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>