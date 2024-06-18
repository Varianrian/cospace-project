<div>
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
      <a href="{{ route('profileBookmark') }}">
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
    <h2 class="mb-5 text-[22px] font-semibold">Reservasi Saya</h2>
    <div class="jusitfy-center flex w-full rounded-md" role="group">
      <a href="{{ route('profileReservation') }}" class="w-1/2">
        <button
          type="button"
          class="w-full rounded-s-lg border border-black bg-transparent py-5 text-sm font-medium text-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-gray-900 focus:text-white focus:ring-2 focus:ring-gray-500"
        >
          Selesai
        </button>
      </a>

      <a href="{{ route('profileBooking') }}" class="w-1/2">
        <button
          type="button"
          class="w-full rounded-e-lg border border-gray-900 bg-transparent py-5 text-sm font-medium text-[#079D75] hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-gray-900 focus:text-[#079D75] focus:ring-2 focus:ring-gray-500"
        >
          Akan Datang
        </button>
      </a>
    </div>
  </div>
  {{-- <x-booked-workspace-card :payment="$payments[0]" :room="$payments[0]->room" /> --}}
  @if ($payments->count() > 0)
    @foreach ($payments as $payment)
      <x-booked-workspace-card :payment="$payment" :room="$payment->room" />
    @endforeach
  @else
    <div class="flex h-[calc(100%-1rem)] w-full items-center justify-center">
      <h1 class="text-[24px] font-bold text-[#112211]">Belum ada reservasi yang akan datang</h1>
    </div>
  @endif
</div>
