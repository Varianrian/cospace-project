<div class="mx-auto flex w-[80%] flex-col items-center">
  <div class="inline-flex w-full rounded-md shadow-lg" role="group">
    <div
      class="flex w-1/4 rounded-s-lg border border-black bg-transparent px-12 py-7 text-sm font-medium text-gray-900"
    >
      <div class="rounded-[8px] border border-[#8DD3BB]">
        <img class="h-20 w-20 rounded-lg object-cover" src="{{ $room->mediaUrls ? $room->mediaUrls[0] : 'https://via.placeholder.com/150' }}" alt="{{ $room->name }}" />
      </div>
      <div class="ml-10 flex items-center justify-center font-bold">{{ $room->name }}</div>
    </div>
    <div
      class="flex w-1/4 items-center justify-center border-b border-t border-gray-900 bg-transparent px-12 py-7 text-[16px] font-medium text-gray-900"
    >
      {{ Carbon\Carbon::parse($payment->booking_date)->locale('id')->format('l, d F Y') }}
    </div>
    <div
      class="flex w-1/2 justify-between gap-16 rounded-e-lg border border-gray-900 bg-transparent px-10 py-7 text-sm font-medium text-gray-900"
    >
      <div class="flex justify-start gap-16">
        <div class="flex gap-4 self-stretch">
          <div class="flex flex-col whitespace-nowrap">
            <div class="text-base text-[#112211]">Check-In</div>
            <div class="mt-2 text-center text-xl font-medium">
              {{ Carbon\Carbon::parse($payment->check_in)->format('H:i') }}
            </div>
          </div>
          <div class="my-auto text-xl font-semibold">—</div>
          <div class="flex flex-col">
            <div class="text-[#112211 text-base">Check Out</div>
            <div class="mt-2 text-center text-xl font-medium">
              {{ Carbon\Carbon::parse($payment->check_out)->format('H:i') }}
            </div>
          </div>
        </div>
      </div>
      <div class="justify flex">
        <button
          data-modal-target="authentication-modal-{{ $payment->id }}"
          data-modal-toggle="authentication-modal-{{ $payment->id }}"
          class="mt-3 block w-full rounded-lg bg-[#8DD3BB] px-5 py-2.5 text-center text-[14px] font-medium text-black hover:bg-[#112211] focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
          type="button"
        >
          Lihat Tiket
        </button>
      </div>
    </div>
  </div>
</div>
<div
  id="authentication-modal-{{ $payment->id }}"
  tabindex="-1"
  aria-hidden="true"
  class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
>
  <div class="relative max-h-full w-full max-w-md p-4">
    <div class="relative rounded-lg bg-white p-4 shadow md:p-5">
      <div class="flex items-center justify-center">
        <h3 class="text-[24px] font-semibold text-[#211951]">{{ $room->name }}</h3>
      </div>
      <div class="mt-4 flex items-center justify-center">
        <h3 class="text-[24px] font-semibold text-[#211951]">INVOICE : {{ $payment->id }}</h3>
      </div>
      <div class="mt-4 flex items-center justify-center">
        <p class="text-[16px] font-normal text-[#112211]">
          {{ Carbon\Carbon::parse($payment->booking_date)->locale('id')->format('l, d F Y') }}
        </p>
      </div>
      <div class="mt-4 flex items-center justify-center">
        <div class="flex justify-start gap-16">
          <div class="flex gap-4 self-stretch">
            <div class="flex flex-col whitespace-nowrap">
              <div class="text-base text-[#112211]">Check-In</div>
              <div class="mt-2 text-center text-xl font-medium">
                {{ Carbon\Carbon::parse($payment->check_in)->format('H:i') }}
              </div>
            </div>
            <div class="my-auto text-xl font-semibold">—</div>
            <div class="flex flex-col">
              <div class="text-[#112211 text-base">Check Out</div>
              <div class="mt-2 text-center text-xl font-medium">
                {{ Carbon\Carbon::parse($payment->check_out)->format('H:i') }}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4 flex justify-center">
        <button
          type="button"
          class="mb-4 inline-flex items-center justify-center rounded-lg bg-[#0021A3] px-4 py-2 text-sm text-white"
          data-modal-hide="authentication-modal-{{ $payment->id }}"
        >
          Close
          <span class="sr-only">Close modal</span>
        </button>
      </div>
    </div>
  </div>
</div>
