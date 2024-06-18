<div class="">
  <div class="bgbanner absolute z-[-1] mt-12 h-72 w-full bg-indigo-200 object-cover"></div>
  <div class="banner z-10 mt-14 items-center rounded-lg bg-indigo-950 lg:mx-32 xl:mx-32">
    <div class="banner-body">
      <div class="container">
        <div class="grid lg:grid-cols-5 xl:grid-cols-5">
          <div class="col-span-2 lg:pb-28 lg:pl-12 lg:pt-10">
            <h2
              class="banner-title font-poppins text-[20px] font-bold text-white sm:text-justify lg:text-[30px] lg:leading-10"
            >
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
          <div id="default-carousel" class="relative col-span-3 h-full lg:pl-12" data-carousel="static">
            <div class="relative h-full overflow-hidden rounded-lg">
              <div class="absolute inset-0">
                <img
                  src="{{ asset('assets/images/auth-banner.png') }}"
                  alt=""
                  class="block h-full w-full object-cover"
                  data-carousel-item
                />
              </div>
              <div class="absolute inset-0">
                <img
                  src="{{ asset('assets/images/banner2.jpg') }}"
                  alt=""
                  class="block h-full w-full object-cover"
                  data-carousel-item
                />
              </div>
              <div class="absolute inset-0">
                <img
                  src="{{ asset('assets/images/banner3.jpg') }}"
                  alt=""
                  class="block h-full w-full object-cover"
                  data-carousel-item
                />
              </div>
            </div>
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

          <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>
      </div>
    </div>
  </div>
</div>
