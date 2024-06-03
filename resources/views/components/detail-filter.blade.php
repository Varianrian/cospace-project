<div class="px-40 pt-3">
  <div class="grid grid-cols-4 gap-6">
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
          <div class="">
            {{--
              <div class="flex items-center pe-3.5 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
              </svg>
              </div>
            --}}
            <input
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
          <div class="relative">
            {{--
              <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
              </svg>
              </div>
            --}}
            <input
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
          <div class="pointer-events-none absolute start-0 items-center">
            {{--
              <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
              </svg>
            --}}
            <img src="{{ asset('assets/images/user-logo.png') }}" class="h-[40px] w-[40px]" alt="" />
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
  </div>
</div>
<div class="px-48 py-10">
  <div class="flex justify-between rounded-[10px] p-6 shadow-lg">
    <div class="">
      <figure class="relative">
        <img src="{{ asset('assets/images/filter1.png') }}" class="" alt="..." />
        <figcaption class="absolute inset-0 flex items-center justify-center text-black">
          <h2 class="z-30 text-[40px] font-bold text-white">+5</h2>
        </figcaption>
      </figure>
    </div>
    <div class="flex justify-between gap-[168px] rounded-[10px] border border-[#B3B3B3] px-10 py-5">
      <div class="leading-10">
        <p class="text-[24px] font-semibold text-[#0021A3]">Coworking</p>
        <div class="flex items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi bi-person"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"
            />
          </svg>
          <p class="ml-2 text-[16px] text-[#666666]">Individual Seating Area</p>
        </div>
        <div class="flex items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="15"
            height="15"
            fill="currentColor"
            class="bi bi-arrows-angle-expand"
            viewBox="0 0 16 16"
            style="transform: rotate(-90deg)"
          >
            <path
              fill-rule="evenodd"
              d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707"
            />
          </svg>
          <p class="ml-3 text-[16px] text-[#666666]">Shared</p>
        </div>
      </div>
      <div class="">
        <p class="flex justify-end text-right text-[20px] font-semibold text-[#079D75]">Rp 15,000.00/Jam</p>
        <p class="flex justify-end text-right text-[14px] text-[#B3B3B3]">*Belum termasuk PPN</p>
        <div class="mt-24 flex justify-end">
          <a
            href="{{ route('payment') }}"
            class="items-center rounded-[15px] rounded-lg bg-[#0F6FFF] px-7 py-4 text-center text-[14px] font-light text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
          >
            Pesan Sekarang
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="my-7 flex justify-between rounded-[10px] p-6 shadow-lg">
    <div class="">
      <figure class="relative">
        <img src="{{ asset('assets/images/filter2.png') }}" class="" alt="..." />
        <figcaption class="absolute inset-0 flex items-center justify-center text-black">
          <h2 class="z-30 text-[40px] font-bold text-white">+5</h2>
        </figcaption>
      </figure>
    </div>
    <div class="flex justify-between gap-48 rounded-[10px] border border-[#B3B3B3] px-10 py-5">
      <div class="leading-10">
        <p class="text-[24px] font-semibold text-[#0021A3]">Meeting Room</p>
        <div class="flex items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="20"
            height="20"
            fill="currentColor"
            class="bi bi-person"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"
            />
          </svg>
          <p class="ml-2 text-[16px] text-[#666666]">Max. 10 Orang</p>
        </div>
        <div class="flex items-center">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="15"
            height="15"
            fill="currentColor"
            class="bi bi-arrows-angle-expand"
            viewBox="0 0 16 16"
            style="transform: rotate(-90deg)"
          >
            <path
              fill-rule="evenodd"
              d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707"
            />
          </svg>
          <p class="ml-3 text-[16px] text-[#666666]">16 m²</p>
        </div>
      </div>
      <div class="">
        <p class="flex justify-end text-right text-[20px] font-semibold text-[#079D75]">Rp 100,000.00/Jam</p>
        <p class="flex justify-end text-right text-[14px] text-[#B3B3B3]">*Belum termasuk PPN</p>
        <div class="mt-24 flex justify-end">
          <a
            href="#"
            class="items-center rounded-[15px] rounded-lg bg-[#0F6FFF] px-7 py-4 text-center text-[14px] font-light text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
          >
            Pesan Sekarang
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
