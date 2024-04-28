@extends('layouts.app')
@section('content')
<div
  class="bg-dots-darker dark:bg-dots-lighter relative min-h-screen bg-slate-800 bg-center text-white selection:bg-red-500 selection:text-white dark:bg-gray-900 sm:flex sm:items-center sm:justify-center"
>
  @if (Route::has('auth.login'))
    <div class="z-10 p-6 text-right sm:fixed sm:right-0 sm:top-0">
      @auth
        <a
          href="{{ url('/home') }}"
          class="font-semibold text-white hover:text-gray-400 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white"
        >
          Home
        </a>

        <form method="POST" action="{{ route('auth.logout') }}" class="inline-block">
          @csrf
          <button
            type="submit"
            class="ml-4 font-semibold text-white hover:text-gray-400 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white"
          >
            Log out
          </button>
        </form>
      @else
        <a
          href="{{ route('auth.login.view') }}"
          class="font-semibold text-white hover:text-gray-400 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white"
        >
          Log in
        </a>

        @if (Route::has('auth.register'))
          <a
            href="{{ route('auth.register.view') }}"
            class="ml-4 font-semibold text-white hover:text-gray-400 focus:rounded-sm focus:outline focus:outline-2 focus:outline-red-500 dark:text-gray-400 dark:hover:text-white"
          >
            Register
          </a>
        @endif
      @endauth
    </div>
  @endif
</div>
