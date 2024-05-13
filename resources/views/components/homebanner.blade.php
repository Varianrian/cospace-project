<div class="relative">
    <div class="bgbanner absolute mt-12 w-full h-72 bg-indigo-200 z-[-1] object-cover"></div>
    <div class="banner items-center mx-32 mt-14 w-[1178px] h-[459px] top-109  bg-indigo-950 rounded-lg z-10">
        <div class="banner-body">
            <div class="container">
                <div class="grid grid-cols-2">
                    <div class="pt-10 pl-12">
                          <h2 class="banner-title text-white font-poppins font-bold text-[30px] leading-10">
                              Solusi cepat untuk pesan <br> tempat, datang dan <br> <span class="text-emerald-400"> mulai bekerja.</span>
                          </h2>
                          <h5 class="banner-text text-white text-[16px] font-normal mt-6">
                              Temukan dan pesan tempat bekerja terbaik yang  <br>sesuai denganmu dengan <span class="font-bold">CoSpace</span>
                          </h5>
                          <button type="button" class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pesan Sekarang</button>
                          <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-transparent dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Baca Lebih Lengkap</button> 
                    </div>
                    <div class=" ">
                        <div id="default-carousel" class="relative" data-carousel="static">
                            <div class="overflow-hidden relative h-96 rounded-lg">
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ asset('assets/images/auth-banner.png') }}" alt="" class="h-full block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                                </div>

                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ asset('assets/images/auth-banner.png') }}" alt="" class="h-full block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                                </div>

                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="{{ asset('assets/images/auth-banner.png') }}" alt="" class="h-full block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                                </div>
                            </div>
                            
                            {{-- <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                <button class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            </div> --}}
                            <button type="button" class="flex absolute top-0 ml-3 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full bg-white/30 group-focus:ring-white group-focus:outline-none">
                                    <svg class="w-3 h-3 text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                    </svg>
                                    <span class="hidden">previous</span>
                                </span> 
                            </button>

                            <button type="button" class="flex absolute top-0 right-3 z-30 items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full bg-white/30 0 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                                    <svg class="w-3 h-3 text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                    </svg>
                                    <span class="hidden">next</span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
                    
                </div>
            </div>
        </div>
    </div>
</div>

