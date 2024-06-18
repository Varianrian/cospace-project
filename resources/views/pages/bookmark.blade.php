@extends('layouts.app')

@section('content')
  @include('components.workspace-banner')
  <div class="flex flex-col items-center">
    <h1 class="mt-5 text-[24px] font-bold">{{ auth()->user()->name }}</h1>
    <p class="mb-4 text-[#112211]">{{ auth()->user()->email }}</p>
    <div class="inline-flex rounded-md shadow-lg" role="group">
      <a href="{{ route('profile') }}">
        <button
          type="button"
          class="rounded-s-lg border border-black bg-transparent px-40 py-5 text-sm font-medium text-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-gray-900 focus:text-white focus:ring-2 focus:ring-gray-500"
        >
          Pengaturan Akun
        </button>
      </a>
      <a href="{{ route('profileReservation') }}">
        <button
          type="button"
          class="border-b border-t border-gray-900 bg-transparent px-40 py-5 text-sm font-medium text-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-gray-900 focus:text-white focus:ring-2 focus:ring-gray-500"
        >
          Reservasi Saya
        </button>
      </a>
      <a href="{{ route('profileBooking') }}">
        <button
          type="button"
          class="rounded-e-lg border border-gray-900 bg-transparent px-40 py-5 text-sm font-medium text-[#079D75] hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-gray-900 focus:text-[#079D75] focus:ring-2 focus:ring-gray-500"
        >
          Bookmark
        </button>
      </a>
    </div>
  </div>
  <div class="mx-auto w-[80%] py-10">
    <h2 class="mb-5 text-[22px] font-semibold">Bookmark</h2>
    @if ($workspaces->count() <= 0)
      <div class="flex h-[calc(100%-1rem)] w-full items-center justify-center">
        <p class="text-[#112211]">Belum ada workspace yang di bookmark</p>
      </div>
    @endif

    @foreach ($workspaces as $workspace)
      {{--
        <x-workspace-card
        id="${workspace.id}"
        image="${workspace.image}"
        name="${workspace.name}"
        address="${workspace.address}"
        cost="${price}"
        rating="${workspace.rating_avg}"
        ulasan="${workspace.rating_count}"
        />
      --}}
      <x-workspace-card
        id="{{ $workspace->id }}"
        image="{{ $workspace->mediaUrls[0] }}"
        name="{{ $workspace->name }}"
        address="{{ $workspace->address }}"
        cost="{{ $workspace->price }}"
        rating="{{ $workspace->rating_avg }}"
        ulasan="{{ $workspace->rating_count }}"
      />
    @endforeach
  </div>
@endsection
