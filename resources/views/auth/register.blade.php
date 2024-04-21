@extends('layouts.app')
@section('content')
  <div class="flex min-h-screen items-center justify-center bg-slate-800 px-4 py-8 sm:px-6 lg:px-8">
    <div class="mx-auto w-full max-w-md">
      <div>
        <img class="mx-auto h-12 w-auto" src="{{ asset('img/logo.png') }}" alt="Workflow" />
        <h2 class="mt-6 text-center text-3xl font-extrabold leading-9 text-white">Register for an account</h2>
      </div>
      <form class="mt-8" action="{{ route('auth.register') }}" method="POST">
        @csrf
        <div class="rounded-md shadow-sm">
          <div>
            <input
              aria-label="Name"
              name="name"
              type="text"
              required
              class="focus:shadow-outline-blue relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-300 focus:outline-none sm:text-sm sm:leading-5"
              placeholder="Name"
            />
          </div>

          <div class="-mt-px">
            <input
              aria-label="Email address"
              name="email"
              type="email"
              required
              class="focus:shadow-outline-blue relative block w-full appearance-none rounded-none border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-300 focus:outline-none sm:text-sm sm:leading-5"
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
          <div class="items center flex">
            <input
              id="terms"
              type="checkbox"
              class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"
            />
            <label for="terms" class="ml-2 block text-sm leading-5 text-gray-300">
              I agree to the
              <a
                href="#"
                class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:underline focus:outline-none"
              >
                terms
              </a>
            </label>
          </div>
          @if (Route::has('auth.login.view'))
            <div class="text-sm leading-5">
              <a
                href="{{ route('auth.login.view') }}"
                class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:underline focus:outline-none"
              >
                Already have an account?
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
            Register
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
