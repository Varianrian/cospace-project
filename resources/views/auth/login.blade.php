@extends('layouts.app')
@section('content')
  <div class="flex w-full">
    @include('components.auth-banner')
    <div class="min-h-screen w-2/5">
      <div class="flex h-full w-full flex-col justify-center px-14">
        <h1 class="text-3xl font-semibold text-slate-800">Masuk</h1>
        <form class="mt-7" action="{{ route('login') }}" method="POST">
          @csrf
          <div class="flex flex-col">
            <div class="flex flex-col space-y-1">
              <label for="email" class="text-sm font-medium text-slate-800">Email</label>
              <input
                id="email"
                name="email"
                type="email"
                required
                class="border-0 border-b-2 border-slate-800 p-0 pb-2 focus:border-[#0021A3] focus:outline-none focus:ring-0"
                placeholder="Masukan Email Anda"
                value="{{ old('email') }}"
              />
            </div>
            <div class="mt-2">
              @error('email')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="mt-4 flex flex-col space-y-1">
              <label for="password" class="text-sm font-medium text-slate-800">Password</label>
              <input
                id="password"
                name="password"
                type="password"
                required
                class="border-0 border-b-2 border-slate-800 p-0 pb-2 focus:border-[#0021A3] focus:outline-none focus:ring-0"
                placeholder="Masukan Password Anda"
              />
            </div>
            <div class="mt-4">
              @error('password')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="mt-2 flex items-center justify-between">
              <div class="flex items-center">
                <input
                  id="remember"
                  type="checkbox"
                  class="form-checkbox h-4 w-4 text-[#0021A3] transition duration-150 ease-in-out"
                />
                <label for="remember" class="ml-2 block text-sm text-slate-800">Ingat Saya</label>
              </div>

              @if (Route::has('auth.forgot-password.view'))
                <a href="{{ route('auth.forgot-password.view') }}" class="text-sm text-slate-800">Lupa Password?</a>
              @endif
            </div>

            <input
              type="submit"
              class="mt-10 rounded-md bg-[#0021A3] py-3 text-lg font-semibold text-white hover:bg-[#001A8D] focus:outline-none focus:ring-2 focus:ring-[#0021A3] focus:ring-opacity-50"
              value="Masuk"
            />
          </div>
        </form>

        @if (Route::has('auth.provider.redirect'))
          <p class="mt-3 text-center text-[#B5B5B5]">or</p>

          @if (Config::get('services.google'))
            <a
              href="{{ route('auth.provider.redirect', 'google') }}"
              class="mt-3 flex items-center justify-center rounded-md border border-[#0021A3] py-2 text-[#0021A3] hover:bg-[#0021A3] hover:text-white"
            >
              <svg
                class="mr-2 h-6 w-6"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.037 21.998a10.313 10.313 0 0 1-7.168-3.049 9.888 9.888 0 0 1-2.868-7.118 9.947 9.947 0 0 1 3.064-6.949A10.37 10.37 0 0 1 12.212 2h.176a9.935 9.935 0 0 1 6.614 2.564L16.457 6.88a6.187 6.187 0 0 0-4.131-1.566 6.9 6.9 0 0 0-4.794 1.913 6.618 6.618 0 0 0-2.045 4.657 6.608 6.608 0 0 0 1.882 4.723 6.891 6.891 0 0 0 4.725 2.07h.143c1.41.072 2.8-.354 3.917-1.2a5.77 5.77 0 0 0 2.172-3.41l.043-.117H12.22v-3.41h9.678c.075.617.109 1.238.1 1.859-.099 5.741-4.017 9.6-9.746 9.6l-.215-.002Z"
                  clip-rule="evenodd"
                />
              </svg>
              <p class="text-sm">Masuk dengan Google</p>
            </a>
          @endif

          @if (Config::get('services.github'))
            <a
              href="{{ route('auth.provider.redirect', 'github') }}"
              class="mt-3 flex items-center justify-center rounded-md border border-[#0021A3] py-2 text-[#0021A3] hover:bg-[#0021A3] hover:text-white"
            >
              <svg
                class="mr-2 h-6 w-6"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                fill="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  fill-rule="evenodd"
                  d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z"
                  clip-rule="evenodd"
                />
              </svg>
              <p class="text-sm">Masuk dengan Github</p>
            </a>
          @endif
        @endif

        <p class="mt-4 text-center">
          Belum punya akun?
          <a href="{{ route('auth.register.view') }}" class="font-medium underline hover:text-[#0021A3]">Daftar</a>
        </p>
      </div>
    </div>
  </div>
@endsection
