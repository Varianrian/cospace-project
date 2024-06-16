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
                <button type="button" class="px-40 py-5 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                    Reservasi Saya
                </button>
            </a>
            <a href="{{ route('profileBooking') }}">
                <button type="button" class="px-40 py-5 text-sm font-medium text-[#079D75] bg-transparent border border-gray-900 rounded-e-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-[#079D75]">
                    Bookmark
                </button>
            </a>
        </div>
    </div>
    <div class="py-10 px-20">
        <h2 class="text-[22px] font-semibold mb-5">Reservasi Saya</h2>
        <div class="inline-flex rounded-md" role="group">
            <a href="{{ route('profileReservation') }}">
                <button type="button" class="px-[290px] py-5 text-sm font-medium text-gray-900 bg-transparent border border-black rounded-s-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                    Selesai
                </button>
            </a>
            
            <a href="{{ route('profileBooking') }}">
                <button type="button" class="px-[277px] py-5 text-sm font-medium text-[#079D75] bg-transparent border border-gray-900 rounded-e-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-[#079D75]">
                    Akan Datang
                </button>
            </a>
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div class="inline-flex rounded-md shadow-lg" role="group">
                <div class="flex px-12 py-7 text-sm font-medium text-gray-900 bg-transparent border border-black rounded-s-lg">
                    <div class="border border-[#8DD3BB] rounded-[8px]">
                        <img class="rounded-t-lg" src="{{ asset('assets/images/logo-eduplex.png') }}" alt="rekom4" />
                    </div>
                    <div class="flex justify-center items-center font-bold ml-10">
                        EduPlex Coworking Space
                    </div>
                </div>
                <div class="flex justify-center items-center px-12 py-7 text-[16px] font-medium text-gray-900 bg-transparent border-t border-b border-gray-900 ">
                    Senin, 1 Desember 2024
                </div>
                <div class="flex justify-between gap-56 px-10 py-7 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-e-lg">
                    <div class="flex justify-start gap-16">
                        <div class="flex gap-4 self-stretch">
                            <div class="flex flex-col whitespace-nowrap">
                              <div class="text-base text-[#112211]">Check-In</div>
                              <div class="mt-2 text-xl font-medium text-center">13:00</div>
                            </div>
                            <div class="my-auto text-xl font-semibold">—</div>
                            <div class="flex flex-col">
                              <div class="text-base text-[#112211">Check Out</div>
                              <div class="mt-2 text-xl font-medium text-center">17:00</div>
                            </div> 
                        </div>
                    </div>
                    <div class="flex justify">
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-black bg-[#8DD3BB] hover:bg-[#112211] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[14px] w-full sm:w-auto mt-3 px-5 py-2.5 text-center" type="button">
                            Lihat Tiket
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
  <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow p-4 md:p-5">
            <div class="flex items-center justify-center">
                <h3 class="text-[24px] font-semibold text-[#211951]">
                    EduPlex Coworking Space
                </h3>
            </div>
            <div class="flex items-center justify-center  mt-4">
                <h3 class="text-[24px] font-semibold text-[#211951]">
                    INVOICE : p6YOEoZ5
                </h3>
            </div>
            <div class="flex items-center justify-center mt-4">
                <p class="text-[16px] font-normal text-[#112211]">
                    Senin, 1 Desember 2024
                </p>
            </div>
            <div class="flex items-center justify-center mt-4">
                <div class="flex justify-start gap-16">
                    <div class="flex gap-4 self-stretch">
                        <div class="flex flex-col whitespace-nowrap">
                        <div class="text-base text-[#112211]">Check-In</div>
                        <div class="mt-2 text-xl font-medium text-center">13:00</div>
                        </div>
                        <div class="my-auto text-xl font-semibold">—</div>
                        <div class="flex flex-col">
                        <div class="text-base text-[#112211">Check Out</div>
                        <div class="mt-2 text-xl font-medium text-center">17:00</div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-4">
              <button type="button" class="mr-4 py-2 px-4 mb-4 text-white bg-[#0021A3] rounded-lg text-sm  inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                Close
                <span class="sr-only">Close modal</span>
              </button> 
            </div>
    </div>
</div> 
</div>