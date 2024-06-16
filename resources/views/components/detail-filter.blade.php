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
<div class="px-48 py-5">
  <x-workspace-room-card :room="$rooms[0]" />
  <x-workspace-room-card :room="$rooms[1]" />
</div>
