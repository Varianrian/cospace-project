<div class="relative">
  <div class="bgbanner absolute z-[-1] mt-12 h-72 w-full bg-indigo-200 object-cover"></div>
  <div class="banner top-109 z-10 mx-32 mt-14 h-[459px] w-[1178px] items-center rounded-lg bg-indigo-950">
    <div class="banner-body">
      <div class="container">
        <div class="grid grid-cols-2">
          <div class="pl-12 pt-10">
            <h2 class="banner-title font-poppins text-[30px] font-bold leading-10 text-white">
              Solusi cepat untuk pesan
              <br />
              tempat, datang dan
              <br />
              <span class="text-emerald-400">mulai bekerja.</span>
            </h2>
            <h5 class="banner-text mt-6 text-[16px] font-normal text-white">
              Temukan dan pesan tempat bekerja terbaik yang
              <br />
              sesuai denganmu dengan
              <span class="font-bold">CoSpace</span>
            </h5>
            <button
              type="button"
              class="mb-2 me-2 mt-6 rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Pesan Sekarang
            </button>
            <button
              type="button"
              class="mb-2 me-2 rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-transparent dark:text-white dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
            >
              Baca Lebih Lengkap
            </button>
          </div>
          <div class=" ">
            <div id="default-carousel" class="relative" data-carousel="static">
              <div class="relative h-96 overflow-hidden rounded-lg">
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img
                    src="{{ asset('assets/images/auth-banner.png') }}"
                    alt=""
                    class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2"
                  />
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img
                    src="{{ asset('assets/images/auth-banner.png') }}"
                    alt=""
                    class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2"
                  />
                </div>

                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img
                    src="{{ asset('assets/images/auth-banner.png') }}"
                    alt=""
                    class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2"
                  />
                </div>
              </div>

              {{--
                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                </div>
              --}}
              <button
                type="button"
                class="group absolute top-0 z-30 ml-3 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                data-carousel-prev
              >
                <span
                  class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/30 group-focus:outline-none group-focus:ring-white"
                >
                  <svg
                    class="h-3 w-3 text-gray-800 rtl:rotate-180"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 6 10"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M5 1 1 5l4 4"
                    />
                  </svg>
                  <span class="hidden">previous</span>
                </span>
              </button>

              <button
                type="button"
                class="group absolute right-3 top-0 z-30 flex h-full cursor-pointer items-center px-4 focus:outline-none"
                data-carousel-next
              >
                <span
                  class="0 inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/30 group-focus:outline-none group-focus:ring-4 group-focus:ring-white"
                >
                  <svg
                    class="h-3 w-3 text-gray-800 rtl:rotate-180"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 6 10"
                  >
                    <path
                      stroke="currentColor"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m1 9 4-4-4-4"
                    />
                  </svg>
                  <span class="hidden">next</span>
                </span>
              </button>
            </div>
          </div>

          <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>
      </div>
    </div>
  </div>
</div>
