<div class="mx-auto flex w-[80%] flex-col items-center">
  <div class="inline-flex w-full rounded-md shadow-lg" role="group">
    <div
      class="flex w-1/4 rounded-s-lg border border-black bg-transparent px-12 py-7 text-sm font-medium text-gray-900"
    >
      <div class="rounded-[8px] border border-[#8DD3BB]">
        <img class="h-20 w-20 rounded-lg object-cover" src="{{ $room->mediaUrls ? $room->mediaUrls[0] : 'https://via.placeholder.com/150' }}"
        alt="{{ $room->name }}" />
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
        @if ($payment->reviewed(auth()->user()->id, $payment->workspace_room_id))
          <button
            type="submit"
            class="mt-3 block w-full cursor-not-allowed items-center justify-center rounded-lg bg-gray-300 px-5 py-2.5 text-sm text-white"
            disabled
          >
            Review Submitted
            <span class="sr-only">Close modal</span>
          </button>
        @else
          <button
            data-modal-target="authentication-modal-{{ $payment->id }}"
            data-modal-toggle="authentication-modal-{{ $payment->id }}"
            class="mt-3 block w-full rounded-lg bg-[#8DD3BB] px-5 py-2.5 text-center text-[14px] font-medium text-black hover:bg-[#112211] focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
            type="button"
            id="review-button-{{ $room->id }}"
          >
            Beri Ulasan
          </button>
        @endif
      </div>
    </div>
  </div>
</div>

<!-- Modal -->

<div
  id="authentication-modal-{{ $payment->id }}"
  tabindex="-1"
  aria-hidden="true"
  class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
>
  <form class="space-y-4" id="review-form-{{ $payment->id }}" onsubmit="submitForm(event, {{ $room->id }})">
    <div class="relative max-h-full min-w-[40vw] p-4">
      <div class="relative rounded-lg bg-white shadow">
        <div class="flex items-center justify-center rounded-t border-b p-4 md:p-5">
          <h3 class="text-xl font-semibold text-gray-900">{{ $room->name }}</h3>
        </div>
        <div class="pl-4 font-medium text-[#211951] md:pl-5">
          <p>Score:</p>
        </div>
        <div class="flex items-center pl-4 pt-1 md:pl-5" id="starRating">
          <div class="rating">
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" value="1" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" value="2" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" value="3" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" value="4" />
            <input type="radio" name="rating-2" class="mask mask-star-2 bg-orange-400" value="5" checked />
          </div>
        </div>
        <div class="p-4 md:p-5">
          <div class="min-h-48 bg-indigo-200 px-3 py-4 text-base leading-6 tracking-normal text-black text-opacity-70">
            <label for="review" class="block">Review:</label>
            <textarea
              id="review"
              name="review"
              class="h-32 w-full rounded-lg border-none bg-transparent px-2.5 pb-2.5 text-sm text-black focus:outline-none focus:ring-0"
              required
            ></textarea>
          </div>
        </div>
        <div class="flex justify-between">
          <button
            type="button"
            class="mb-4 ml-4 inline-flex items-center justify-center rounded-lg bg-transparent px-2 py-2 text-sm text-[#0021A3]"
            data-modal-hide="authentication-modal-{{ $payment->id }}"
          >
            Cancel
            <span class="sr-only">Close modal</span>
          </button>
          <button
            type="submit"
            class="mb-4 mr-4 inline-flex items-center justify-center rounded-lg bg-[#0021A3] px-4 py-2 text-sm text-white"
            data-modal-hide="authentication-modal-{{ $payment->id }}"
          >
            Submit
            <span class="sr-only">Close modal</span>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- End Modal -->
