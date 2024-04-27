@extends('layouts.app')
@section('content')
  <div class="flex w-full">
    @include('components.auth-banner')
    <div class="min-h-screen w-2/5">
      <div class="flex h-full w-full flex-col justify-center px-14">
        <h1 class="text-3xl font-semibold text-slate-800">Lupa Password</h1>
        <p class="mt-2 text-slate-800">Kami akan mengirimkan tautan pengaturan ulang kata sandi ke alamat email Anda</p>
        <form class="mt-7" action="{{ route('auth.forgot-password') }}" method="POST">
          @csrf
          <div class="flex flex-col">
            <div class="flex flex-col space-y-1">
              <label for="email" class="text-sm font-medium text-slate-800">Email</label>
              <input
                id="email"
                name="email"
                type="email"
                required
                class="border-b-2 border-slate-800 pb-2 focus:border-[#0021A3] focus:outline-none"
                placeholder="Masukan Email Anda"
                value="{{ old('email') }}"
              />
            </div>
            <div class="mt-2">
              @error('email')
                <p class="text-xs italic text-red-500">{{ $message }}</p>
              @enderror
            </div>

            <input
              type="submit"
              class="mt-10 rounded-md bg-[#0021A3] py-3 text-lg font-semibold text-white hover:bg-[#001A8D] focus:outline-none focus:ring-2 focus:ring-[#0021A3] focus:ring-opacity-50"
              value="Send Reset Link"
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
