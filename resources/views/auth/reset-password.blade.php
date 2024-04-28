@extends('layouts.app')
@section('content')
  <div class="flex w-full">
    @include('components.auth-banner')
    <div class="min-h-screen w-2/5">
      <div class="flex h-full w-full flex-col justify-center px-14">
        <h1 class="text-3xl font-semibold text-slate-800">Reset Password</h1>
        <form class="mt-7" action="{{ route('auth.reset-password') }}" method="POST">
          @csrf
          <input type="hidden" name="token" value="{{ $token }}" />
          <input type="hidden" name="email" value="{{ request()->email }}" />

          <div class="flex flex-col">
            <div class="flex flex-col space-y-1">
              <label for="password" class="text-sm font-medium text-slate-800">Password</label>
              <input
                id="password"
                name="password"
                type="password"
                required
                class="border-0 border-b-2 border-slate-800 p-0 pb-2 focus:border-[#0021A3] focus:outline-none focus:ring-0"
                placeholder="Masukan Password Baru"
              />
            </div>
            <div class="mt-4">
              @error('password')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <div class="mt-4 flex flex-col space-y-1">
              <label for="password_confirmation" class="text-sm font-medium text-slate-800">Konfirmasi Password</label>
              <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                required
                class="border-0 border-b-2 border-slate-800 p-0 pb-2 focus:border-[#0021A3] focus:outline-none focus:ring-0"
                placeholder="Konfirmasi Password Baru"
              />
            </div>
            @if ($errors)
              @foreach ($errors->all() as $error)
                <p class="text-xs italic text-red-500">{{ $error }}</p>
              @endforeach
            @endif

            <input
              type="submit"
              class="mt-10 rounded-md bg-[#0021A3] py-3 text-lg font-semibold text-white hover:bg-[#001A8D] focus:outline-none focus:ring-2 focus:ring-[#0021A3] focus:ring-opacity-50"
              value="Reset Password"
            />
          </div>
        </form>
        <div class="mt-3 flex items-center justify-between">
          <a href="{{ route('auth.login') }}" class="text-sm text-[#001A8D]">Kembali ke halaman Login</a>
        </div>
      </div>
    </div>
  </div>
@endsection
