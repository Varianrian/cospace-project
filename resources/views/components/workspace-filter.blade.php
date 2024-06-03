<div class="items-center">
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
    <div class="px-14 mt-10">
        <div class="grid grid-cols-4 gap-6">
            <div class="col-span-1 md:block hidden">
                <h2 class="font-bold">Filter</h2>
                <div id="accordion-open" data-accordion="open" data-active-classes="bg-white">
                    <h2 id="accordion-open-heading-1">
                        <button type="button" class="flex items-center justify-between w-full py-5 pr-5 font-medium rtl:text-right text-black " data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
                            <span class="text-black">Jenis Coworking Space</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
                        <div class="px-5 pb-5 border-b border-gray-200">
                            <button type="button" class="text-black border border-[#079D75] focus:ring-2 focus:outline-1 focus:ring-green-300 font-medium rounded-[4px] text-xs px-2 py-1.5 text-center me-2 mb-2">Coworking (Shared)</button>
                            <button type="button" class="text-black border border-[#079D75] focus:ring-2 focus:outline-1 focus:ring-green-300 font-medium rounded-[4px] text-xs px-2 py-1.5 text-center me-2 mb-2">Ruang Meeting</button>
                            <button type="button" class="text-black border border-[#079D75] focus:ring-2 focus:outline-1 focus:ring-green-300 font-medium rounded-[4px] text-xs px-2 py-1.5 text-center me-2 mb-2">Event Hall</button>
                            <button type="button" class="text-black border border-[#079D75] focus:ring-2 focus:outline-1 focus:ring-green-300 font-medium rounded-[4px] text-xs px-2 py-1.5 text-center me-2 mb-2">Private Office</button>
                            <button type="button" class="text-black border border-[#079D75] focus:ring-2 focus:outline-1 focus:ring-green-300 font-medium rounded-[4px] text-xs px-2 py-1.5 text-center me-2 mb-2">Studio</button>
                        </div>
                    </div>
                
                    <h2 id="accordion-open-heading-2">
                        <button type="button" class="flex items-center justify-between w-full py-5 pr-5  font-medium rtl:text-right text-black gap-3" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
                            <span class="text-black">Harga/Jam</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
                        <div class="px-5 pb-5 border-b border-gray-200">                    
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">Range Harga 1</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">Range Harga 2</label>
                            </div> 
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">Range Harga 3</label>
                            </div> 
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">Range Harga 4</label>
                            </div> 
                        </div>
                    </div>
                    <h2 id="accordion-open-heading-3">
                        <button type="button" class="flex items-center justify-between w-full py-5 pr-5 font-medium rtl:text-right text-black gap-3" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                            <span class="text-black">Fasilitas</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
                        <div class="px-5 pb-5 border-b border-gray-200">                    
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">Gratis Parkir</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">AC</label>
                            </div> 
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">Smart TV</label>
                            </div> 
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">Proyektor</label>
                            </div> 
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">Speaker</label>
                            </div> 
                        </div>
                    </div>
                    <h2 id="accordion-open-heading-4">
                        <button type="button" class="flex items-center justify-between w-full py-5 pr-5 font-medium rtl:text-right text-black gap-3" data-accordion-target="#accordion-open-body-4" aria-expanded="false" aria-controls="accordion-open-body-4">
                            <span class="text-black">Kapasitas</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-open-body-4" class="hidden" aria-labelledby="accordion-open-heading-4">
                        <div class="px-5 pb-5 border-b border-gray-200">                    
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">1-5 Orang</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">6-10 Orang</label>
                            </div> 
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">11-20 Orang</label>
                            </div> 
                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-[#0021A3] border-black border-2 rounded focus:ring-blue-500">
                                <label for="default-checkbox" class="ms-2 text-sm font-medium text-black ">21-30 Orang</label>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:col-span-3 col-span-4">
                <div class="flex justify-between">
                    <p class="font-semibold">Tampilkan 9 dari <span class="text-[#079D75]"> 25 hasil... </span></p>
                    <p class="flex justify-end font-semibold">Urutkan dari
                        <span class="max-w-sm mx-0 pl-3 text-black">
                                <select id="countries" class="border border-white text-black block border-none focus:ring-white focus:border-white py-0">
                                <option selected class="text-normal text-black"> Terpopuler</option>
                                <option value="US" class="text-normal text-black"> United States</option>
                                <option value="CA"> Canada</option>
                                <option value="FR"> France</option>
                                <option value="DE"> Germany</option>
                                </select>
                        </span>
                    </p>
                </div>
                <div>
                    <div class="flex flex-wrap gap-6 pt-5 px-1 justify-start">
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
                    <a href="#" class=" w-[177px] h-[52px] mt-2 inline-flex items-center px-5 py-2 text-[14px] font-normal text-center text-white bg-[#0F6FFF] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Lihat Lebih Banyak
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>