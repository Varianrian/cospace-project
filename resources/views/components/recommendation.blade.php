<h5 class="mb-2 mt-12 text-center font-bold text-[#4131A0] lg:text-[26px]">Rekomendasi</h5>
<p class="mb-6 text-center text-[16px] text-sm font-light text-gray-400">
  Terpopuler, sering dipesan oleh pengunjung kami
</p>
<div class="flex flex-wrap justify-center gap-6 pt-5 lg:px-10">
  @foreach ($workspaces as $workspace)
      <x-workspace-card
        id="{{ $workspace->id }}"
        image="{{ $workspace->mediaUrls ? $workspace->mediaUrls[0] : 'https://via.placeholder.com/150' }}"
        name=" {!!$workspace->name !!}"
        address="{{ $workspace->address }}"
        cost="{{ $workspace->price }}"
        rating="{{ $workspace->rating_avg }}"
        ulasan="{{ $workspace->rating_count }}"
      />
    @endforeach

</div>
<div class="mt-8 flex items-center justify-center">
  <a
    href="{{ route('workspace') }}"
    class="inline-flex items-center rounded-lg bg-[#0F6FFF] px-5 py-2 text-center text-[14px] font-normal text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
  >
    Lihat Lebih Banyak
  </a>
</div>
