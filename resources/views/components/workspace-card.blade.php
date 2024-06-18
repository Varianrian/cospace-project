<div class="rekomendasi min-h-[371px] w-[200px] rounded-[10px] border border-[#B3B3B3] bg-white px-3 py-4 lg:w-[300px]">
  <div class="h-[100px] w-full md:h-[200px]">
    <img class="h-full w-full overflow-hidden rounded-lg object-cover" src="{{ $image }}" alt="{{ $name }}" />
  </div>
  <div class="px-2 pt-5">
    <a href="/detail-workspace/{{ $id }}">
      <h5 class="text-[16px] font-medium tracking-tight text-black">{{ $name }}</h5>
    </a>
    <p class="mb-1 text-xs text-black">{{ $address }}</p>
    <p class="mb-1 text-xs text-gray-500">Mulai dari Rp {{ $cost }}/Jam</p>
    <div class="flex items-center gap-1" id="rating">
      <p class="text-xs text-black" id="rating-value">{{ $rating }}</p>
      <svg
        class="mb-1 h-4 w-4 text-[#FFA217]"
        aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg"
        fill=" currentColor"
        viewBox="0 0 22 20"
      >
        <path
          d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
        />
      </svg>
      <p class="text-xs text-black">({{ $ulasan }} ulasan)</p>
    </div>
    <div class="flex justify-end">
      <a
        href="/detail-workspace/{{ $id }}"
        class="mt-4 inline-flex items-center rounded-lg bg-[#0021A3] px-5 py-2 text-center text-[14px] font-light text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
      >
        Lihat
      </a>
    </div>
  </div>
</div>
