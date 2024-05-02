<nav class="bg-white w-full">
    <div class="container mx-auto flex justify-between items-center lg:pl-[70px] py-3">
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
                    <a href="{{ route('home') }}" class="font-medium underline text-green-600" >
                        Home
                    </a>
                </li>            
                <li class="nav-item dropdown ml-0 lg:ml-8">
                  <a class="nav-link dropdown-toggle" href="/Workspace" role="button" aria-expanded="false">
                      Workspace
                  </a>
                  <ul class="dropdown-menu hidden absolute">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                {{-- <li class="nav-item ml-0 lg:ml-8">
                  <a href="/aboutus" class="nav-link {{ ($title === 'Tentang Kami') ? 'active' : '' }} text-blue-600">
                      Tentang Kami
                  </a>
                </li> --}}
              </ul>
              <form class="flex ml-0 lg:ml-8" role="search">
                  <div class="relative flex items-center">
                      <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                          </svg>
                      </span>
                      <input class="bg-white border border-gray-300 py-1 pl-10 pr-4 text-lg rounded-xl" type="search" placeholder="Search" aria-label="Search">
                      <button type="submit" class="rounded-xl btn ml-0 mt-30 text-white bg-violet-400 hover:bg-violet-500 focus:ring-2 focus:outline-none focus:ring-violet-200 font-medium text-sm px-4 py-2 dark:bg-violet-500 dark:hover:bg-violet-400 dark:focus:ring-violet-300 ">
                          Search
                      </button>
                  </div>  
              </form>
              <ul class="nav-item ml-0 lg:ml-8 mr-16 flex items-center">
                @auth
                    <form action="{{ route('auth.logout') }}" method="POST" class="flex items-center">
                        @csrf
                            <button
                                type="submit"
                                class="btn rounded-xl bg-indigo-700 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-indigo-800 dark:hover:bg-indigo-700 dark:focus:ring-indigo-600">
                            Logout
                            </button>
                    </form>
                    @else
                    <a
                        href="{{ route('auth.login') }}"
                        class="btn rounded-xl bg-indigo-700 px-4 py-2 text-sm font-medium text-white hover:bg-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 dark:bg-indigo-800 dark:hover:bg-indigo-700 dark:focus:ring-indigo-600">
                    Login
                    </a>
                @endauth   
              </ul>
        </div>
    </div>
  </nav>
  