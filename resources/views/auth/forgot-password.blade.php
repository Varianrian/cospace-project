@extends('layouts.app')

@section('content')
  <div class="flex min-h-screen items-center justify-center bg-slate-800 px-4 py-8 sm:px-6 lg:px-8">
    <div class="mx-auto w-full max-w-md">
      <div>
        <img class="mx-auto h-12 w-auto" src="{{ asset('img/logo.png') }}" alt="Workflow" />
        <h2 class="mt-6 text-center text-3xl font-extrabold leading-9 text-white">Forgot your password?</h2>
      </div>
      <form class="mt-8" action="{{ route('auth.forgot-password') }}" method="POST">
        @csrf
        <div class="rounded-md shadow-sm">
          <div>
            <input
              aria-label="Email address"
              name="email"
              type="email"
              required
              class="focus:shadow-outline-blue relative block w-full appearance-none rounded-none rounded-b-md rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-blue-300 focus:outline-none sm:text-sm sm:leading-5"
              placeholder="Email address"
            />
          </div>
          @if ($errors)
            @foreach ($errors->all() as $error)
              <p class="text-xs italic text-red-500">{{ $error }}</p>
            @endforeach
          @endif
        </div>
        <div class="mt-6">
          <button
            type="submit"
            class="focus:shadow-outline-blue group relative flex w-full justify-center rounded-md border border-transparent bg-slate-700 px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out hover:bg-slate-600 focus:border-blue-300 focus:outline-none active:bg-slate-700"
          >
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <svg
                class="h-5 w-5 text-slate-500 transition duration-150 ease-in-out group-hover:text-slate-400"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
              </svg>
            </span>
            Send password reset link
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
