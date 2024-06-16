<div>
    <div class="flex flex-col items-center">
        <h1 class="mt-5 font-bold text-[24px]">John Doe</h1>
        <p class="mb-4 text-[#112211]">john.doe@gmail.com</p>
        <div class="inline-flex rounded-md shadow-lg" role="group">
            <a href="{{ route('profile') }}">
                <button type="button" class="px-40 py-5 text-sm font-medium text-gray-900 bg-transparent border border-black rounded-s-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                    Pengaturan Akun
                </button>
            </a>
            <a href="{{ route('profileReservation') }}">
                <button type="button" class="px-40 py-5 text-sm font-medium text-[#079D75] bg-transparent border-t border-b border-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-white focus:text-[#079D75]">
                    Reservasi Saya
                </button>
            </a>
            <a href="{{ route('profileBooking') }}">
                <button type="button" class="px-40 py-5 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-e-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                    Bookmark
                </button>
            </a>
        </div>
    </div>
    <div class="py-10 px-20">
        <h2 class="text-[22px] font-semibold mb-5">Reservasi Saya</h2>
        <div class="inline-flex rounded-md" role="group">
            <a href="{{ route('profileReservation') }}">
                <button type="button" class="px-[290px] py-5 text-sm font-medium text-[#079D75] bg-transparent border border-black rounded-s-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-[#079D75]">
                    Selesai
                </button>
            </a>
            
            <a href="{{ route('profileBooking') }}">
                <button type="button" class="px-[277px] py-5 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-e-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                    Akan Datang
                </button>
            </a>
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div class="inline-flex rounded-md shadow-lg" role="group">
                <div class="flex px-12 py-7 text-sm font-medium text-gray-900 bg-transparent border border-black rounded-s-lg">
                    <div class="border border-[#8DD3BB] rounded-[8px]">
                        <img class="rounded-t-lg" src="{{ asset('assets/images/logo-coco.png') }}" alt="rekom4" />
                    </div>
                    <div class="flex justify-center items-center font-bold ml-10">
                        CO&CO Hub
                    </div>
                </div>
                <div class="flex justify-center items-center px-12 py-7 text-[16px] font-medium text-gray-900 bg-transparent border-t border-b border-gray-900 ">
                    Jumat, 1 September 2024
                </div>
                <div class="flex justify-between gap-56 px-10 py-7 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-e-lg">
                    <div class="flex justify-start gap-16">
                        <div class="flex gap-4 self-stretch">
                            <div class="flex flex-col whitespace-nowrap">
                              <div class="text-base text-[#112211]">Check-In</div>
                              <div class="mt-2 text-xl font-medium text-center">08:00</div>
                            </div>
                            <div class="my-auto text-xl font-semibold">—</div>
                            <div class="flex flex-col">
                              <div class="text-base text-[#112211">Check Out</div>
                              <div class="mt-2 text-xl font-medium text-center">10:00</div>
                            </div> 
                        </div>
                    </div>
                    <div class="flex justify">
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-black bg-[#8DD3BB] hover:bg-[#112211] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[14px] w-full sm:w-auto mt-3 px-5 py-2.5 text-center" type="button">
                            Berikan Penilaian
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
  <!-- Modal -->
  <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <div class="relative bg-white rounded-lg shadow">
              <div class="flex items-center justify-center p-4 md:p-5 border-b rounded-t">
                  <h3 class="text-xl font-semibold text-gray-900 ">
                      CO&CO Hub
                  </h3>
              </div>
              <div class="pl-4 md:pl-5 text-[#211951] font-medium">
                <p>Score: </p>
              </div>
              <div class="flex items-center pl-4 md:pl-5 pt-1" id="starRating">
                @for ($i = 0; $i < 5; $i++)
                    <svg
                    class="me-1 h-4 w-4 text-[#C2CEFF] cursor-pointer"
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
                    <div class="px-3 pt-4 pb-36text-base tracking-normal leading-6 bg-indigo-200 text-white text-opacity-70 h-48">
                      <label for="review" class="block">Review:</label>
                      <textarea id="review" name="review" class="text-white text-sm rounded-lg w-full pb-2.5 px-2.5 bg-transparent h-32 border-none focus:outline-none focus:ring-0" placeholder="" value="" required></textarea>
                    </div>
                  </form>
              </div>
              <div class="flex justify-between">
                <button type="button" class="ml-4 py-2 px-2 mb-4 text-[#0021A3] bg-transparent rounded-lg text-sm  inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                  Cancel
                  <span class="sr-only">Close modal</span>
                </button>
                <button type="button" class="mr-4 py-2 px-4 mb-4 text-white bg-[#0021A3] rounded-lg text-sm  inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                  Post
                  <span class="sr-only">Close modal</span>
                </button> 
              </div>
      </div>
  </div> 
</div>