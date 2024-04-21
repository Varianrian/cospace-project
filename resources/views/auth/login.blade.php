@extends('layouts.app')
@section('content')
  <div class="flex min-h-screen items-center justify-center bg-slate-800 px-4 py-8 sm:px-6 lg:px-8">
    <div class="mx-auto w-full max-w-md">
      @if (session('status'))
        <div class="relative rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700" role="alert">
          <strong class="font-bold">Success!</strong>
          <span class="block sm:inline">{{ session('status') }}</span>
          <span class="absolute bottom-0 right-0 top-0 px-4 py-3">
            <svg
              class="h-6 w-6 fill-current text-green-500"
              role="button"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              id="close-button"
            >
              <title>Close</title>
              <path
                fill-rule="evenodd"
                d="M14.354 5.354a2 2 0 00-2.828 0L10 7.172 7.172 5.354a2 2 0 10-2.828 2.828L7.172 10l-2.828 2.828a2 2 0 102.828 2.828L10 12.828l2.828 2.828a2 2 0 102.828-2.828L12.828 10l2.828-2.828a2 2 0 000-2.828z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </span>
        </div>
      @endif

      <div>
        <img class="mx-auto h-12 w-auto" src="{{ asset('img/logo.png') }}" alt="Workflow" />
        <h2 class="mt-6 text-center text-3xl font-extrabold leading-9 text-white">Sign in to your account</h2>
      </div>
      <form class="mt-8" action="{{ route('auth.login') }}" method="POST">
        @csrf
        <input type="hidden" name="remember" value="true" />
        <div class="rounded-md shadow-sm">
          <div>
            <input
              aria-label="Email address"
              name="email"
              type="email"
              required
              class="focus:shadow-outline-blue relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-300 focus:outline-none sm:text-sm sm:leading-5"
              placeholder="Email address"
            />
          </div>

          <div class="-mt-px">
            <input
              aria-label="Password"
              name="password"
              type="password"
              required
              class="focus:shadow-outline-blue relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-300 focus:outline-none sm:text-sm sm:leading-5"
              placeholder="Password"
            />
          </div>
          @if ($errors)
            @foreach ($errors->all() as $error)
              <p class="text-xs italic text-red-500">{{ $error }}</p>
            @endforeach
          @endif
        </div>
        <div class="mt-6 flex items-center justify-between">
          <div class="flex items-center">
            <input
              id="remember_me"
              type="checkbox"
              class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
            />
            <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-300">Remember me</label>
          </div>
          @if (Route::has('password.request'))
            <div class="text-sm leading-5">
              <a
                href="{{ route('password.request') }}"
                class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:underline focus:outline-none"
              >
                Forgot your password?
              </a>
            </div>
          @endif

          @if (Route::has('auth.register.view'))
            <div class="text-sm leading-5">
              <a
                href="{{ route('auth.register.view') }}"
                class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:underline focus:outline-none"
              >
                Register
              </a>
            </div>
          @endif
        </div>
        <div class="mt-6">
          <button
            type="submit"
            class="focus:shadow-outline-indigo group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out hover:bg-indigo-500 focus:border-indigo-700 focus:outline-none active:bg-indigo-700"
          >
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <svg
                class="h-5 w-5 text-indigo-500 transition duration-150 ease-in-out group-hover:text-indigo-400"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                <path
                  fill-rule="evenodd"
                  d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16z"
                  clip-rule="evenodd"
                />
              </svg>
            </span>
            Sign in
          </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      document.getElementById('email').focus();
    });

    document.getElementById('close-button').addEventListener('click', function () {
      this.parentElement.parentElement.style.display = 'none';
    });
  </script>
@endsection
