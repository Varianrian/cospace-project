<div class="items-center">
  <div class="px-40 pt-3">
    {{-- <div class="grid grid-cols-4 gap-6">
      <div class="col-span-1">
        <label for="datepicker" class="mb-2 block text-sm font-medium text-gray-900">Date</label>
        <div class="relative w-full">
          <div class="pointer-events-none absolute inset-y-3 start-0 items-center ps-3.5">
            <svg
              class="h-4 w-4 text-gray-500"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"
              />
            </svg>
          </div>
          <input
            datepicker
            type="text"
            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
            placeholder="MM/DD/YY"
            required
          />
        </div>
      </div>
      <div class="col-span-2">
        <form class="mx-auto grid grid-cols-2 gap-6">
          <div>
            <label for="start-time" class="mb-2 block text-sm font-medium text-gray-900">Check In</label>
            <div class=""> --}}
              {{--
                <div class="flex items-center pe-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                </svg>
                </div>
              --}}
              {{-- <input
                type="time"
                id="start-time"
                class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-left text-sm leading-none text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                min="09:00"
                max="18:00"
                value="00:00"
                required
              />
            </div>
          </div>
          <div>
            <label for="end-time" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Check Out</label>
            <div class="relative"> --}}
              {{--
                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                </svg>
                </div>
              --}}
              {{-- <input
                type="time"
                id="end-time"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm leading-none text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                min="09:00"
                max="18:00"
                value="00:00"
                required
              />
            </div>
          </div>
        </form>
      </div>
      <div class="col-span-1">
        <label for="guests" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Guests</label>
        <div class="flex grid-cols-4">
          <div class="relative col-span-3 w-full">
            <div class="pointer-events-none absolute start-0 items-center"> --}}
              {{--
                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
              --}}
              {{-- <img src="{{ asset('assets/images/user-logo.png') }}" class="h-[40px] w-[40px]" alt="" />
            </div>
            <input
              type="text"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="Guest"
            />
          </div>
          <div class="col-span-1">
            <button
              type="submit"
              class="btn ml-[1px] h-[40px] w-[40px] rounded-[4px] bg-[#0F6FFF] px-[10px] hover:bg-[#0F6FFF] focus:outline-none focus:ring-2 focus:ring-[#0F6FFF]"
            >
              <svg
                class="h-5 w-5 text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 20 20"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
  <div class="mt-10 xl:px-14 lg:px-5">
    <div class="grid grid-cols-4 xl:gap-6 lg:gap-2">
      <div class="col-span-1 hidden md:block">
        <h2 class="font-bold">Filter</h2>
        <div id="accordion-open" data-accordion="open" data-active-classes="bg-white">
          <h2 id="accordion-open-heading-1">
            <button
              type="button"
              class="flex w-full items-center justify-between py-5 xl:pr-5 lg:pr-0 font-medium text-black rtl:text-right"
              data-accordion-target="#accordion-open-body-1"
              aria-expanded="true"
              aria-controls="accordion-open-body-1"
            >
              <span class="text-black">Jenis Coworking Space</span>
              <svg
                data-accordion-icon
                class="h-3 w-3 shrink-0 rotate-180 text-black"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
            <div class="border-b border-gray-200 xl:px-5 pb-5">
              <button
                type="button"
                class="mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                Coworking (Shared)
              </button>
              <button
                type="button"
                class="mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                Ruang Meeting
              </button>
              <button
                type="button"
                class="mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                Event Hall
              </button>
              <button
                type="button"
                class="mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                Private Office
              </button>
              <button
                type="button"
                class="mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                Studio
              </button>
            </div>
          </div>

          <h2 id="accordion-open-heading-2">
            <button
              type="button"
              class="flex w-full items-center justify-between gap-3 py-5 pr-5 font-medium text-black rtl:text-right"
              data-accordion-target="#accordion-open-body-2"
              aria-expanded="false"
              aria-controls="accordion-open-body-2"
            >
              <span class="text-black">Harga/Jam</span>
              <svg
                data-accordion-icon
                class="h-3 w-3 shrink-0 rotate-180 text-black"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
            <div class="border-b border-gray-200 px-5 pb-5">
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">Range Harga 1</label>
              </div>
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">Range Harga 2</label>
              </div>
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">Range Harga 3</label>
              </div>
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">Range Harga 4</label>
              </div>
            </div>
          </div>
          <h2 id="accordion-open-heading-3">
            <button
              type="button"
              class="flex w-full items-center justify-between gap-3 py-5 pr-5 font-medium text-black rtl:text-right"
              data-accordion-target="#accordion-open-body-3"
              aria-expanded="false"
              aria-controls="accordion-open-body-3"
            >
              <span class="text-black">Fasilitas</span>
              <svg
                data-accordion-icon
                class="h-3 w-3 shrink-0 rotate-180 text-black"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
            <div class="border-b border-gray-200 px-5 pb-5">
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">Gratis Parkir</label>
              </div>
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">AC</label>
              </div>
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">Smart TV</label>
              </div>
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">Proyektor</label>
              </div>
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">Speaker</label>
              </div>
            </div>
          </div>
          <h2 id="accordion-open-heading-4">
            <button
              type="button"
              class="flex w-full items-center justify-between gap-3 py-5 pr-5 font-medium text-black rtl:text-right"
              data-accordion-target="#accordion-open-body-4"
              aria-expanded="false"
              aria-controls="accordion-open-body-4"
            >
              <span class="text-black">Kapasitas</span>
              <svg
                data-accordion-icon
                class="h-3 w-3 shrink-0 rotate-180 text-black"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 10 6"
              >
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5 5 1 1 5"
                />
              </svg>
            </button>
          </h2>
          <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
            <div class="border-b border-gray-200 px-5 pb-5">
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">1-5 Orang</label>
              </div>
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">6-10 Orang</label>
              </div>
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">11-20 Orang</label>
              </div>
              <div class="mb-4 flex items-center">
                <input
                  id="default-checkbox"
                  type="checkbox"
                  value=""
                  class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                />
                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black">21-30 Orang</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-4 md:col-span-3">
        <div class="flex justify-between">
          <p class="font-semibold">
            Tampilkan 9 dari
            <span class="text-[#079D75]">25 hasil...</span>
          </p>
          <p class="flex justify-end font-semibold">
            Urutkan dari
            <span class="mx-0 max-w-sm pl-3 text-black">
              <select
                id="countries"
                class="block border border-none border-white py-0 text-black focus:border-white focus:ring-white"
              >
                <option selected class="text-normal text-black">Terpopuler</option>
                <option value="US" class="text-normal text-black">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
              </select>
            </span>
          </p>
        </div>
        <div>
          <div class="flex flex-wrap justify-start xl:gap-6 lg:gap-1 xl:px-1 pt-5">
            <x-workspace-card
              image="assets/images/rekom1.png"
              name="EduPlex Coworking Space"
              address="Jl. Ir. H. Juanda No.84, Lebakgede"
              cost="Mulai dari Rp15.000/Jam"
              rating="4.8"
              ulasan="(32 ulasan)"
            />
            <x-workspace-card
              image="assets/images/rekom2.png"
              name="CO&CO Hub"
              address="Jl. Dipati Ukur No.33, Lebakgede"
              cost="Mulai dari Rp20.000/Jam"
              rating="4.6"
              ulasan="(24 ulasan)"
            />
            <x-workspace-card
              image="assets/images/rekom3.png"
              name="Point Lab Co-working Space"
              address="Jl. Banda No.30, Citarum"
              cost="Mulai dari Rp10.000/Jam"
              rating="4.7"
              ulasan="(27 ulasan)"
            />
            <x-workspace-card
              image="assets/images/rekom1.png"
              name="EduPlex Coworking Space"
              address="Jl. Ir. H. Juanda No.84, Lebakgede"
              cost="Mulai dari Rp15.000/Jam"
              rating="4.8"
              ulasan="(32 ulasan)"
            />
            <x-workspace-card
              image="assets/images/rekom2.png"
              name="CO&CO Hub"
              address="Jl. Dipati Ukur No.33, Lebakgede"
              cost="Mulai dari Rp20.000/Jam"
              rating="4.6"
              ulasan="(24 ulasan)"
            />
            <x-workspace-card
              image="assets/images/rekom3.png"
              name="Point Lab Co-working Space"
              address="Jl. Banda No.30, Citarum"
              cost="Mulai dari Rp10.000/Jam"
              rating="4.7"
              ulasan="(27 ulasan)"
            />
            <x-workspace-card
              image="assets/images/rekom1.png"
              name="EduPlex Coworking Space"
              address="Jl. Ir. H. Juanda No.84, Lebakgede"
              cost="Mulai dari Rp15.000/Jam"
              rating="4.8"
              ulasan="(32 ulasan)"
            />
            <x-workspace-card
              image="assets/images/rekom2.png"
              name="CO&CO Hub"
              address="Jl. Dipati Ukur No.33, Lebakgede"
              cost="Mulai dari Rp20.000/Jam"
              rating="4.6"
              ulasan="(24 ulasan)"
            />
            <x-workspace-card
              image="assets/images/rekom3.png"
              name="Point Lab Co-working Space"
              address="Jl. Banda No.30, Citarum"
              cost="Mulai dari Rp10.000/Jam"
              rating="4.7"
              ulasan="(27 ulasan)"
            />
          </div>
        </div>
        <div class="flex justify-center pt-8">
          <a
            href="#"
            class="mt-2 inline-flex h-[52px] w-[177px] items-center rounded-lg bg-[#0F6FFF] px-5 py-2 text-center text-[14px] font-normal text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
          >
            Lihat Lebih Banyak
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
