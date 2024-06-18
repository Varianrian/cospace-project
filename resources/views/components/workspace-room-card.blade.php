<div class="my-2 flex h-fit justify-between gap-4 rounded-[10px] p-6 shadow-lg">
  <div class="h-full w-1/3" id="room-image-{{ $room->id }}" onclick="showDetailImage({{ $room->id }})">
    <figure class="relative h-full w-full">
      {{-- <img src="{{ $room->mediaUrls[0] }}" class="" alt="..." /> --}}
      <div class="h-[250px] w-full">
        <img
          class="h-full w-full overflow-hidden rounded-lg object-cover"
          src="{{ isset($room->mediaUrls[0]) ? $room->mediaUrls[0] : 'https://via.placeholder.com/150' }}"
          alt="{{ $room->name }}"
        />
      </div>
      <figcaption class="absolute inset-0 flex items-center justify-center text-black">
        <h2 class="z-30 text-[40px] font-bold text-white">+{{ count($room->mediaUrls) }}</h2>
      </figcaption>
    </figure>
  </div>
  <div
    id="detail-image-container-{{ $room->id }}"
    class="fixed left-0 top-0 z-50 hidden h-screen w-screen bg-black bg-opacity-50"
  >
    <div class="flex h-full w-full items-center justify-center">
      <div class="relative max-h-[80%] w-[80%] overflow-y-scroll rounded-[10px] bg-white p-5">
        <div class="fixed absolute right-5 top-5">
          <button
            id="close-detail-image-{{ $room->id }}"
            class="text-[24px] font-bold text-[#666666] focus:outline-none"
          >
            &times;
          </button>
        </div>
        @foreach ($room->mediaUrls as $mediaUrl)
          <div class="mx-auto h-[80%] w-[50%]">
            <img id="detail-image" class="object-fit h-full w-full" src="{{ $mediaUrl }}" alt="{{ $room->name }}" />
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="flex w-2/3 justify-between rounded-[10px] border border-[#B3B3B3] px-10 py-5">
    <div class="leading-10">
      <p class="text-[24px] font-semibold text-[#0021A3]">{{ $room->name }}</p>
      <div class="flex items-center">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          fill="currentColor"
          class="bi bi-person"
          viewBox="0 0 16 16"
        >
          <path
            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"
          />
        </svg>
        <p class="ml-2 text-[16px] text-[#666666]">Max. {{ $room->capacity }} Orang</p>
      </div>
    </div>
    <div class="flex h-full flex-col items-end justify-between">
      <div class="flex flex-col justify-end gap-3 text-right">
        <p class="text-[20px] font-semibold text-[#079D75]">Rp {{ number_format($room->price, 0, ',', '.') }}/Jam</p>
        <p class="text-[14px] text-[#B3B3B3]">*Belum termasuk PPN</p>
      </div>
      <div class="flex justify-end">
        <a
          href="/payment/{{ $room->id }}"
          class="items-center rounded-[15px] rounded-lg bg-[#0F6FFF] px-7 py-4 text-center text-[14px] font-light text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
        >
          Pesan Sekarang
        </a>
      </div>
    </div>
  </div>
</div>
<script>
  function showDetailImage(roomId) {
    const detailImageContainer = document.getElementById(`detail-image-container-${roomId}`);
    detailImageContainer.classList.remove('hidden');
    const closeDetailImage = document.getElementById(`close-detail-image-${roomId}`);
    closeDetailImage.addEventListener('click', () => {
      detailImageContainer.classList.add('hidden');
    });

    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        detailImageContainer.classList.add('hidden');
      }
    });
  }
</script>
