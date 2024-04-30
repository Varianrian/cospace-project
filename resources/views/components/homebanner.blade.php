@extends('pages.home')

@section('components.homebanner')
<div class="relative">
    <div class="bgbanner absolute mt-12 left-0 w-full h-72 bg-indigo-200 z-[-1] object-cover"></div>
    <div class="banner mx-28 mt-14 w-1178 h-430 top-109 left-131 bg-indigo-950 rounded-lg z-10">
        <div class="banner-body">
            <div class="container">
                <div class="relative flex">
                      <div class="col-md-5">
                          <h2 class="banner-title text-white font-poppins font-bold text-3xl leading-10 pt-10 pl-10">
                              Pesan tempatmu,<br> bawa perlengkapan,<br> dan <span class="text-emerald-400"> mulai bekerja.</span>
                          </h2>
                          <h5 class="banner-text text-white text-base font-normal pl-10 pt-4">
                              Pesan tempat bekerja terbaik yang sesuai <br> denganmu dengan <span class="font-bold">CoSpace</span>
                          </h5>
                          
                          <button type="button" class="mt-3 ml-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Pesan Sekarang</button>
                          <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-transparent dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Baca Lebih Lengkap</button> 
                      </div>
                      <div id="animation-carousel" class="col-md-7" data-carousel="static">
                          <div class="relative w-639 h-430 overflow-hidden rounded-lg md:h-96">
                              <div class="hidden duration-200 ease-linear" data-carousel-item>
                                  <img src="assets\images\banner1.png" class="absolute block w-3/5 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                              </div>
                              <div class="hidden duration-200 ease-linear" data-carousel-item>
                                  <img src="assets\images\banner1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                              </div>
                              <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                                  <img src="assets\images\banner1.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                              </div>
                          </div>
                          <button type="button" class="absolute ml-96 top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                              <span class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-white dark:bg-white/30 group-hover:bg-white/50 dark:group-hover:bg-white/60 0 group-focus:outline-none">
                                  <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                  </svg>
                                  <span class="sr-only">Previous</span>
                              </span>
                          </button>
                          <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                              <span class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-white dark:bg-white/30 group-hover:bg-white/50 dark:group-hover:bg-white/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-white/70 group-focus:outline-none">
                                  <svg class="w-3 h-3 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                  </svg>
                                  <span class="sr-only">Next</span>
                              </span>
                          </button>
                      </div>
                  </div>
            </div>
        </div>
    </div>
  </div>
  @endsection