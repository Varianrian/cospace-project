<div class="px-40 pt-3">
    <div class="grid grid-cols-4 gap-6">
        <div class="col-span-1">
            <label for="datepicker" class="block mb-2 text-sm font-medium text-gray-900">Date</label>
            <div class="relative w-full">
                <div class="absolute inset-y-3 start-0 items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
                </div>
                <input datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="MM/DD/YY" required/>
            </div>
        </div>
        <div class="col-span-2">
            <form class="mx-auto grid grid-cols-2 gap-6">
                <div>
                    <label for="start-time" class="block mb-2 text-sm font-medium text-gray-900">Check In</label>
                    <div class="">
                        {{-- <div class="flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                            </svg>
                        </div> --}}
                        <input type="time" id="start-time" class="bg-gray-50 border leading-none border-gray-300 text-left text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5" min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
                <div>
                    <label for="end-time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Check Out</label>
                    <div class="relative">
                        {{-- <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                            </svg>
                        </div> --}}
                        <input type="time" id="end-time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " min="09:00" max="18:00" value="00:00" required />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-span-1">
            <label for="guests" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guests</label>
            <div class="flex grid-cols-4">
                <div class="col-span-3 relative w-full">
                    <div class="absolute start-0 items-center pointer-events-none">
                    {{-- <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg> --}}
                        <img src="{{ asset('assets/images/user-logo.png') }}" class="w-[40px] h-[40px]" alt="">
                    </div>
                    <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Guest">
                </div>
                <div class="col-span-1">
                    <button type="submit" class="ml-[1px] w-[40px] h-[40px] px-[10px] rounded-[4px] btn bg-[#0F6FFF] hover:bg-[#0F6FFF] focus:ring-2 focus:outline-none focus:ring-[#0F6FFF]">
                        <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>    
    </div>
    </div>
    <div class="px-48 py-10">
        <div class="shadow-lg flex justify-between p-6 rounded-[10px]">
            <div class="">
                <figure class="relative">
                    <img src="{{ asset('assets/images/filter1.png') }}" class="" alt="...">
                    <figcaption class="absolute inset-0 flex items-center justify-center text-black">
                        <h2 class="text-[40px] text-white font-bold z-30">+5</h2>
                    </figcaption>
                </figure>    
            </div>
            <div class="py-5 px-10 border border-[#B3B3B3] rounded-[10px] flex justify-between gap-[168px]">
                <div class="leading-10">
                    <p class="text-[24px] text-[#0021A3] font-semibold">Coworking</p>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          </svg>
                          <p class="text-[#666666] text-[16px] ml-2">Individual Seating Area</p>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16" style="transform: rotate(-90deg);">
                            <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707"/>
                          </svg>
                          <p class="text-[#666666] text-[16px] ml-3">Shared</p>
                    </div>
                    
                </div>
                <div class="">
                    <p class="flex justify-end text-right text-[20px] text-[#079D75] font-semibold">Rp 15,000.00/Jam</p>
                    <p class="flex justify-end text-right text-[14px] text-[#B3B3B3]">*Belum termasuk PPN </p>
                    <div class="flex justify-end mt-24">
                        <a href="{{ route('payment') }}" class="items-center px-7 py-4 text-[14px] rounded-[15px] font-light text-center text-white bg-[#0F6FFF] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow-lg flex justify-between p-6 rounded-[10px] my-7">
            <div class="">
                <figure class="relative">
                    <img src="{{ asset('assets/images/filter2.png') }}" class="" alt="...">
                    <figcaption class="absolute inset-0 flex items-center justify-center text-black">
                        <h2 class="text-[40px] text-white font-bold z-30">+5</h2>
                    </figcaption>
                </figure>    
            </div>
            <div class="py-5 px-10 border border-[#B3B3B3] rounded-[10px] flex justify-between gap-48">
                <div class="leading-10">
                    <p class="text-[24px] text-[#0021A3] font-semibold">Meeting Room</p>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          </svg>
                          <p class="text-[#666666] text-[16px] ml-2">Max. 10 Orang</p>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16" style="transform: rotate(-90deg);">
                            <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707"/>
                          </svg>
                          <p class="text-[#666666] text-[16px] ml-3">16 m²</p>
                    </div>
                </div>
                <div class="">
                    <p class="flex justify-end text-right text-[20px] text-[#079D75] font-semibold">Rp 100,000.00/Jam</p>
                    <p class="flex justify-end text-right text-[14px] text-[#B3B3B3]">*Belum termasuk PPN </p>
                    <div class="flex justify-end mt-24">
                        <a href="#" class="items-center px-7 py-4 text-[14px] rounded-[15px] font-light text-center text-white bg-[#0F6FFF] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>    
</div>
