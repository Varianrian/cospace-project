<nav class="bg-white">
  <div class="container mx-auto flex items-center justify-between px-5 py-5">
    <a class="font-poppins text-left text-xl font-bold" href="/">
      Co
      <span class="text-indigo-700">Space</span>
    </a>
    <button class="focus:outline-none lg:hidden" aria-label="Toggle navigation" id="navbar-toggle">
      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>
    <div class="hidden lg:flex lg:w-auto lg:items-center" id="navbarSupportedContent">
      <ul class="flex list-none flex-col gap-4 lg:ml-auto lg:flex-row" id="nav-items">
        <li class="nav-item">
          <a
            href="{{ route('home') }}"
            class="{{ request()->is('/') ? 'text-[#079D75]' : 'text-[#0021A3]' }} text-[16px] font-normal"
          >
            Home
          </a>
        </li>
        <li class="nav-item">
          <a
            href="{{ route('workspace') }}"
            class="{{ request()->is('/workspace') ? 'text-[#079D75]' : 'text-[#0021A3]' }} text-[16px] font-normal"
          >
            Workspace
          </a>
        </li>
      </ul>
      <form class="flex lg:ml-8" role="search" action="/workspace" method="GET">
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
            name="search"
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
        {{--
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
          href="{{ route('login') }}"
          class="btn mr-[60px] rounded-[10px] bg-[#0021A3] bg-[#0021A3] px-4 py-2 text-[16px] font-light text-white hover:bg-[#0021A3] hover:bg-[#0021A3] focus:outline-none focus:ring-2 focus:ring-[#0021A3]"
          >
          Profil
          </a>
          @endauth
        --}}
        <script>
          document.addEventListener('DOMContentLoaded', function () {
            const dropdownButton = document.getElementById('dropdownButton');
            const dropdownMenu = document.getElementById('dropdownMenu');

            dropdownButton.addEventListener('click', function () {
              dropdownMenu.classList.toggle('hidden');
            });

            document.addEventListener('click', function (event) {
              if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
              }
            });
          });
        </script>

        {{--
          @auth
          <form action="{{ route('auth.logout') }}" method="POST" class="flex items-center">
          @csrf
          <button
          type="submit"
          class="btn rounded-xl bg-[#0021A3] px-4 py-2 text-[16px] font-light text-white hover:bg-[#0021A3] focus:outline-none focus:ring-2 focus:ring-[#0021A3]"
          >
          Logout
          </button>
          </form>
          @else
          <div class="relative">
          <button
          id="dropdownButton"
          class="btn mr-[60px] rounded-[10px] bg-[#0021A3] px-4 py-2 text-[16px] font-light text-white hover:bg-[#0021A3] focus:outline-none focus:ring-2 focus:ring-[#0021A3]"
          >
          Profil
          </button>
          <div id="dropdownMenu" class="absolute right-0 z-50 mt-2 hidden w-48 rounded-md bg-white shadow-lg">
          <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
          <a href="{{ route('login') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Login</a>
          </div>
          </div>
          @endauth
        --}}
        @auth
          <div class="relative">
            <button
              id="dropdownButton"
              class="btn mr-[60px] rounded-[10px] bg-[#0021A3] px-4 py-2 text-[16px] font-light text-white hover:bg-[#0021A3] focus:outline-none focus:ring-2 focus:ring-[#0021A3]"
            >
              Menu
            </button>
            <div id="dropdownMenu" class="absolute right-0 z-50 mt-2 hidden w-48 rounded-md bg-white shadow-lg">
              <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
              <form action="{{ route('auth.logout') }}" method="POST" class="w-full">
                @csrf
                <button type="submit" class="block w-full px-4 py-2 text-left text-gray-800 hover:bg-gray-200">
                  Logout
                </button>
              </form>
            </div>
          </div>
        @else
          <a
            href="{{ route('login') }}"
            class="btn mr-[60px] rounded-[10px] bg-[#0021A3] px-4 py-2 text-[16px] font-light text-white hover:bg-[#0021A3] focus:outline-none focus:ring-2 focus:ring-[#0021A3]"
          >
            Login
          </a>
        @endauth
      </ul>
    </div>
  </div>
</nav>

<script>
  document.getElementById('navbar-toggle').addEventListener('click', function () {
    const navItems = document.getElementById('navbarSupportedContent');
    navItems.classList.toggle('hidden');
    navItems.classList.toggle('flex');
    navItems.classList.toggle('flex-col');
    navItems.classList.toggle('lg:flex-row');
  });
</script>
