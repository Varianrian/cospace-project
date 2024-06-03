<nav class="bg-white">
  <div class="container ml-[60px] flex items-center justify-between py-5">
    <a class="font-poppins text-left text-xl font-bold" href="/">
      Co
      <span class="text-indigo-700">Space</span>
    </a>
    <button class="focus:outline-none lg:hidden" aria-label="Toggle navigation">
      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>
    <div class="hidden lg:flex lg:w-auto lg:items-center" id="navbarSupportedContent">
      <ul class="flex list-none flex-col lg:ml-auto lg:flex-row">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="text-[16px] font-normal text-[#079D75]">Home</a>
        </li>
        <li class="nav-item dropdown ml-8">
          <a
            id="dropdownHoverButton"
            data-dropdown-toggle="dropdownHover"
            data-dropdown-trigger="hover"
            href="{{ route('workspace') }}"
            class="inline-flex items-center text-center text-[16px] font-normal text-[#0021A3]"
          >
            Workspace
            <svg
              class="ms-3 h-2.5 w-2.5"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 10 6"
              onclick="event.preventDefault()"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m1 1 4 4 4-4"
              />
            </svg>
          </a>
          <div
            id="dropdownHover"
            class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700"
          >
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                  Kategori
                </a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                  Settings
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
      <form class="flex lg:ml-8" role="search">
        <div class="relative flex items-center">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg
              class="h-4 w-4 text-gray-400"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 20 20"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
              />
            </svg>
          </span>
          <input
            class="w-[310px] rounded-[10px] border-[0.5px] border-[#666666] bg-white py-1 pl-10 pr-4 text-[14px] font-light"
            type="search"
            placeholder="Temukan coworking space..."
            aria-label="Search"
          />
          <button
            type="submit"
            class="btn h-[36px] w-[92px] rounded-[10px] bg-[#836FFF] px-2 py-1 text-[14px] font-light text-white hover:bg-[#836FFF] focus:outline-none focus:ring-2 focus:ring-[#836FFF]"
          >
            Search
          </button>
        </div>
      </form>
      <ul class="nav-item flex items-center lg:ml-8">
        @auth
          <form action="{{ route('auth.logout') }}" method="POST" class="flex items-center">
            @csrf
            <button
              type="submit"
              class="btn rounded-xl bg-[#0021A3] bg-[#0021A3] px-4 py-2 text-[16px] font-light text-white hover:bg-[#0021A3] hover:bg-[#0021A3] focus:outline-none focus:ring-2 focus:ring-[#0021A3]"
            >
              Logout
            </button>
          </form>
        @else
          <a
            href="{{ route('auth.login') }}"
            class="btn mr-[60px] rounded-[10px] bg-[#0021A3] bg-[#0021A3] px-4 py-2 text-[16px] font-light text-white hover:bg-[#0021A3] hover:bg-[#0021A3] focus:outline-none focus:ring-2 focus:ring-[#0021A3]"
          >
            Profil
          </a>
        @endauth
      </ul>
    </div>
  </div>
</nav>
