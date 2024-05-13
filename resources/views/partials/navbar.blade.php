<nav class="bg-white">
    <div class="container ml-[60px] flex justify-between items-center py-5">
        <a class="text-xl font-poppins font-bold text-left" href="/">Co
          <span class="text-indigo-700">Space</span>
        </a>
        <button class="lg:hidden focus:outline-none" aria-label="Toggle navigation">
            <svg 
              class="w-6 h-6" 
              fill="none" 
              viewBox="0 0 24 24" 
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <div class="hidden lg:flex lg:items-center lg:w-auto" id="navbarSupportedContent">
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="font-normal text-[16px] text-[#079D75]" >
                        Home
                    </a>
                </li>            
                <li class="nav-item dropdown ml-8">                 
                    <a id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" href="/Workspace"
                        class="text-[#0021A3] text-[16px] text-center inline-flex items-center font-normal">
                        Workspace  
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"
                            onclick="event.preventDefault()">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </a>
                    <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Kategori</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
              <form class="flex lg:ml-8" role="search">
                  <div class="relative flex items-center">
                      <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                          <svg class="w-4 h-4 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                          </svg>
                      </span>
                      <input class="w-[310px] bg-white border-[0.5px] border-[#666666] py-1 pl-10 pr-4 text-[14px] rounded-[10px] font-light" type="search" placeholder="Temukan coworking space..." aria-label="Search">
                      <button type="submit" class="w-[92px] h-[36px] rounded-[10px] btn text-white bg-[#836FFF] hover:bg-[#836FFF] focus:ring-2 focus:outline-none focus:ring-[#836FFF] font-light text-[14px] px-2 py-1">
                          Search
                      </button>
                  </div>  
              </form>
              <ul class="nav-item lg:ml-8 flex items-center">
                @auth
                    <form action="{{ route('auth.logout') }}" method="POST" class="flex items-center">
                        @csrf
                            <button
                                type="submit"
                                class="btn rounded-xl bg-[#0021A3] px-4 py-2 text-[16px] font-light text-white hover:bg-[#0021A3] focus:outline-none focus:ring-2 focus:ring-[#0021A3] bg-[#0021A3] hover:bg-[#0021A3]">
                            Logout
                            </button>
                    </form>
                    @else
                    <a
                        href="{{ route('auth.login') }}"
                        class="btn rounded-[10px] mr-[60px]  bg-[#0021A3] px-4 py-2 text-[16px] font-light text-white hover:bg-[#0021A3] focus:outline-none focus:ring-2 focus:ring-[#0021A3] bg-[#0021A3] hover:bg-[#0021A3]">
                    Profil
                    </a>
                @endauth   
              </ul>
        </div>
    </div>
  </nav>
  