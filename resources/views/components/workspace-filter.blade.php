<div class="items-center">
  <div class="mt-10 px-14">
    <div class="grid grid-cols-4 gap-6">
      <div class="col-span-1 hidden md:block">
        <h2 class="font-bold">Filter</h2>
        <div id="accordion-open" data-accordion="open" data-active-classes="bg-white">
          <h2 id="accordion-open-heading-1">
            <button
              type="button"
              class="flex w-full items-center justify-between py-5 font-medium text-black lg:pr-0 xl:pr-5 rtl:text-right"
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
            <div class="border-b border-gray-200 pb-5 xl:px-5">
              <button
                value="all"
                type="button"
                class="category-button mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                All
              </button>
              <button
                value="Coworking Space"
                type="button"
                class="category-button mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                Coworking (Private)
              </button>
              <button
                value="Meeting Room"
                type="button"
                class="category-button mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                Meeting Room
              </button>
              <button
                value="Event Space"
                type="button"
                class="category-button mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                Event Space
              </button>
              <button
                value="Private Office"
                type="button"
                class="category-button mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                Private Office
              </button>
              <button
                value="Studio"
                type="button"
                class="category-button mb-2 me-2 rounded-[4px] border border-[#079D75] px-2 py-1.5 text-center text-xs font-medium text-black focus:outline-1 focus:ring-2 focus:ring-green-300"
              >
                Studio
              </button>
            </div>
          </div>

          <form id="filter-form" onsubmit="formSubmit(event)">
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
                    id="checkbox-1"
                    name="price"
                    type="radio"
                    value="0"
                    class="price-range h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                  />
                  <label for="checkbox-1" class="ms-2 text-sm font-medium text-black">Rp 0 - Rp 50.000</label>
                </div>
                <div class="mb-4 flex items-center">
                  <input
                    id="checkbox-2"
                    name="price"
                    type="radio"
                    value="1"
                    class="price-range h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                  />
                  <label for="checkbox-2" class="ms-2 text-sm font-medium text-black">Rp 50.000 - Rp 100.000</label>
                </div>
                <div class="mb-4 flex items-center">
                    <input
                      id="checkbox-3"
                      name="price"
                      type="radio"
                      value="2"
                      class="price-range h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                    />
                    <label for="checkbox-3" class="ms-2 text-sm font-medium text-black">Rp 100.000 - Rp 200.000</label>
                </div>
                <div class="mb-4 flex items-center">
                    <input
                      id="checkbox-4"
                      name="price"
                      type="radio"
                      value="3"
                      class="price-range h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                    />
                    <label for="checkbox-4" class="ms-2 text-sm font-medium text-black">Rp 200.000 - Rp 500.000</label>
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
                    id="facility-2"
                    type="checkbox"
                    name="facilities"
                    value="AC"
                    class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                  />
                  <label for="facility-2" class="ms-2 text-sm font-medium text-black">AC</label>
                </div>
                <div class="mb-4 flex items-center">
                  <input
                    id="facility-3"
                    type="checkbox"
                    name="facilities"
                    value="Smart TV"
                    class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                  />
                  <label for="facility-3" class="ms-2 text-sm font-medium text-black">Smart TV</label>
                </div>
                <div class="mb-4 flex items-center">
                  <input
                    id="facility-4"
                    type="checkbox"
                    name="facilities"
                    value="Projector"
                    class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                  />
                  <label for="facility-4" class="ms-2 text-sm font-medium text-black">Projector</label>
                </div>
                <div class="mb-4 flex items-center">
                  <input
                    id="facility-5"
                    type="checkbox"
                    name="facilities"
                    value="Speaker"
                    class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                  />
                  <label for="facility-5" class="ms-2 text-sm font-medium text-black">Speaker</label>
                </div>
                <div class="mb-4 flex items-center">
                  <input
                    id="facility-6"
                    type="checkbox"
                    name="facilities"
                    value="Whiteboard"
                    class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                  />
                  <label for="facility-6" class="ms-2 text-sm font-medium text-black">Whiteboard</label>
                </div>
                <div class="mb-4 flex items-center">
                  <input
                    id="facility-7"
                    type="checkbox"
                    name="facilities"
                    value="Printer"
                    class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                  />
                  <label for="facility-7" class="ms-2 text-sm font-medium text-black">Printer</label>
                </div>
                <div class="mb-4 flex items-center">
                    <input
                      id="facility-7"
                      type="checkbox"
                      name="facilities"
                      value="WiFi"
                      class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                    />
                    <label for="facility-7" class="ms-2 text-sm font-medium text-black">WiFi</label>
                </div>
                <div class="mb-4 flex items-center">
                    <input
                      id="facility-7"
                      type="checkbox"
                      name="facilities"
                      value="Free Parking"
                      class="h-4 w-4 rounded border-2 border-black text-[#0021A3] focus:ring-blue-500"
                    />
                    <label for="facility-7" class="ms-2 text-sm font-medium text-black">Free Parking</label>
                </div>
              </div>
            </div>
            <div id="submit" class="flex justify-center">
              <button
                type="submit"
                class="mt-5 w-full rounded-lg bg-[#0021A3] py-2 text-white focus:outline-none focus:ring-2 focus:ring-[#0021A3]"
              >
                Terapkan Filter
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-span-4 md:col-span-3">
        <div class="flex justify-between">
          <p class="font-semibold" id="workspace-count">
            {{-- Ditemukan <span class="text-[#0021A3]" id="workspace-count-number">0</span> Coworking Space --}}
          </p>
          <p class="flex justify-end font-semibold">
            Urutkan dari
            <span class="mx-0 max-w-sm pl-3 text-black">
              <select
                id="sort"
                class="block border border-none border-white py-0 text-black focus:border-white focus:ring-white"
                onchange="sortWorkspace()"
              >
                <option selected class="text-normal text-black" \ value="popular">Terpopuler</option>
                <option value="lowest-price" class="text-normal text-black">Harga Terendah</option>
                <option value="highest-price" class="text-normal text-black">Harga Tertinggi</option>
              </select>
            </span>
          </p>
        </div>
        <div>
          <div class="flex flex-wrap justify-start gap-6 px-1 pt-5" id="workspace-container">
            {{--
              <x-workspace-card
              image="assets/images/rekom1.png"
              name="EduPlex Coworking Space"
              address="Jl. Ir. H. Juanda No.84, Lebakgede"
              cost="15.000"
              rating="3"
              ulasan="(32 ulasan)"
              />
            --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
<x-workspace-script />
