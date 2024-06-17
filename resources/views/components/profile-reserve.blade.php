<div>
  <div class="flex flex-col items-center">
    <h1 class="mt-5 text-[24px] font-bold">John Doe</h1>
    <p class="mb-4 text-[#112211]">john.doe@gmail.com</p>
    <div class="inline-flex rounded-md shadow-lg" role="group">
      <a href="{{ route('profile') }}">
        <button
          type="button"
          class="rounded-s-lg border border-black bg-transparent px-40 py-5 text-sm font-medium text-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-gray-900 focus:text-white focus:ring-2 focus:ring-gray-500"
        >
          Pengaturan Akun
        </button>
      </a>
      <a href="{{ route('profileReservation') }}">
        <button
          type="button"
          class="border-b border-t border-gray-900 bg-transparent px-40 py-5 text-sm font-medium text-[#079D75] hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-white focus:text-[#079D75] focus:ring-2 focus:ring-gray-500"
        >
          Reservasi Saya
        </button>
      </a>
      <a href="{{ route('profileBooking') }}">
        <button
          type="button"
          class="rounded-e-lg border border-gray-900 bg-transparent px-40 py-5 text-sm font-medium text-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-gray-900 focus:text-white focus:ring-2 focus:ring-gray-500"
        >
          Bookmark
        </button>
      </a>
    </div>
  </div>
  <div class="mx-auto w-[80%] py-10">
    <h2 class="mb-5 text-[22px] font-semibold">Reservasi Saya</h2>
    <div class="jusitfy-center flex w-full rounded-md" role="group">
      <a href="{{ route('profileReservation') }}" class="w-1/2">
        <button
          type="button"
          class="w-full rounded-s-lg border border-black bg-transparent py-5 text-sm font-medium text-[#079D75] hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-gray-900 focus:text-[#079D75] focus:ring-2 focus:ring-gray-500"
        >
          Selesai
        </button>
      </a>

      <a href="{{ route('profileBooking') }}" class="w-1/2">
        <button
          type="button"
          class="w-full rounded-e-lg border border-gray-900 bg-transparent py-5 text-sm font-medium text-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-gray-900 focus:text-white focus:ring-2 focus:ring-gray-500"
        >
          Akan Datang
        </button>
      </a>
    </div>
  </div>
  <div class="flex flex-col items-center">
    <div class="inline-flex rounded-md shadow-lg" role="group">
      <div class="flex rounded-s-lg border border-black bg-transparent px-12 py-7 text-sm font-medium text-gray-900">
        <div class="rounded-[8px] border border-[#8DD3BB]">
          <img class="rounded-t-lg" src="{{ asset('assets/images/logo-coco.png') }}" alt="rekom4" />
        </div>
        <div class="ml-10 flex items-center justify-center font-bold">CO&CO Hub</div>
      </div>
      <div
        class="flex items-center justify-center border-b border-t border-gray-900 bg-transparent px-12 py-7 text-[16px] font-medium text-gray-900"
      >
        Jumat, 1 September 2024
      </div>
      <div
        class="flex justify-between gap-56 rounded-e-lg border border-gray-900 bg-transparent px-10 py-7 text-sm font-medium text-gray-900"
      >
        <div class="flex justify-start gap-16">
          <div class="flex gap-4 self-stretch">
            <div class="flex flex-col whitespace-nowrap">
              <div class="text-base text-[#112211]">Check-In</div>
              <div class="mt-2 text-center text-xl font-medium">08:00</div>
            </div>
            <div class="my-auto text-xl font-semibold">—</div>
            <div class="flex flex-col">
              <div class="text-[#112211 text-base">Check Out</div>
              <div class="mt-2 text-center text-xl font-medium">10:00</div>
            </div>
          </div>
        </div>
        <div class="justify flex">
          <button
            data-modal-target="authentication-modal"
            data-modal-toggle="authentication-modal"
            class="mt-3 block w-full rounded-lg bg-[#8DD3BB] px-5 py-2.5 text-center text-[14px] font-medium text-black hover:bg-[#112211] focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
            type="button"
          >
            Berikan Penilaian
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div
  id="authentication-modal"
  tabindex="-1"
  aria-hidden="true"
  class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0"
>
  <div class="relative max-h-full w-full max-w-md p-4">
    <div class="relative rounded-lg bg-white shadow">
      <div class="flex items-center justify-center rounded-t border-b p-4 md:p-5">
        <h3 class="text-xl font-semibold text-gray-900">CO&CO Hub</h3>
      </div>
      <div class="pl-4 font-medium text-[#211951] md:pl-5">
        <p>Score:</p>
      </div>
      <div class="flex items-center pl-4 pt-1 md:pl-5" id="starRating">
        @for ($i = 0; $i < 5; $i++)
          <svg
            class="me-1 h-4 w-4 cursor-pointer text-[#C2CEFF]"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="currentColor"
            viewBox="0 0 22 20"
            onclick="toggleStarColor(this)"
          >
            <path
              d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
            />
          </svg>
        @endfor
      </div>

      <script>
        function toggleStarColor(star) {
          if (star.classList.contains('text-gray-400')) {
            star.classList.remove('text-gray-400');
            star.classList.add('text-[#FFA217]'); // Ganti warna menjadi kuning
          } else {
            star.classList.remove('text-[#FFA217]');
            star.classList.add('text-gray-400'); // Kembalikan warna menjadi abu-abu
          }
        }
      </script>
      <div class="p-4 md:p-5">
        <form class="space-y-4" action="#">
          <div class="pb-36text-base h-48 bg-indigo-200 px-3 pt-4 leading-6 tracking-normal text-white text-opacity-70">
            <label for="review" class="block">Review:</label>
            <textarea
              id="review"
              name="review"
              class="h-32 w-full rounded-lg border-none bg-transparent px-2.5 pb-2.5 text-sm text-white focus:outline-none focus:ring-0"
              placeholder=""
              value=""
              required
            ></textarea>
          </div>
        </form>
      </div>
      <div class="flex justify-between">
        <button
          type="button"
          class="mb-4 ml-4 inline-flex items-center justify-center rounded-lg bg-transparent px-2 py-2 text-sm text-[#0021A3]"
          data-modal-hide="authentication-modal"
        >
          Cancel
          <span class="sr-only">Close modal</span>
        </button>
        <button
          type="button"
          class="mb-4 mr-4 inline-flex items-center justify-center rounded-lg bg-[#0021A3] px-4 py-2 text-sm text-white"
          data-modal-hide="authentication-modal"
        >
          Post
          <span class="sr-only">Close modal</span>
        </button>
      </div>
    </div>
  </div>
</div>
