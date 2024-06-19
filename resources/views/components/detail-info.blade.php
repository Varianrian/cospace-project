<div>
  <div class="grid grid-cols-2 gap-2 px-32 py-7">
    <img
      src="{{ $workspace->mediaUrls ? $workspace->mediaUrls[0] : 'https://via.placeholder.com/150' }}"
      alt="{{ $workspace->name }}"
      class="max-h-[400px] w-full object-cover"
    />
    <div class="grid grid-cols-2 gap-2">
      @foreach ($workspace->mediaUrls as $mediaUrl)
        @if ($loop->index == 0)
          @continue
        @endif

        @if ($loop->index == 4)
          @break
        @endif

        <img src="{{ $mediaUrl }}" alt="{{ $workspace->name }}" class="max-h-[200px] w-full object-cover" />
      @endforeach
    </div>
  </div>
</div>
<div class="flex justify-between px-28">
  <div class="">
    <h2 class="text-[24px] font-semibold text-[#0021A3]">{{ $workspace->name }}</h2>
    <div class="flex items-center">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="16"
        height="16"
        fill="currentColor"
        class="bi bi-geo-alt"
        viewBox="0 0 16 16"
      >
        <path
          d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"
        />
        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
      </svg>
      <p class="ml-1 text-[16px] leading-8">{{ $workspace->address }}</p>
    </div>
    <div class="flex">
      @for ($i = 0; $i < 5; $i++)
        @if ($i < $workspace->rating_avg)
          <svg
            class="me-1 h-4 w-4 text-[#FFA217]"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill=" currentColor"
            viewBox="0 0 22 20"
          >
            <path
              d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
            />
          </svg>
        @else
          <svg
            class="me-1 h-4 w-4"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            stroke="#FFA217"
            viewBox="0 0 22 20"
          >
            <path
              d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"
            />
          </svg>
        @endif
      @endfor

      <p class="text-[14px] text-[#666666]">
        <span class="font-semibold">{{ $workspace->rating_avg }}</span>
        dari {{ $workspace->rating_count }} Ulasan
      </p>
    </div>
  </div>
  <div>
    <p class="flex justify-end text-[20px] font-semibold">
      Mulai dari&nbsp;
      <span class="text-[#079D75]">Rp {{ number_format($workspace->price, 0, ',', '.') }}</span>
      /Jam
    </p>
    <div class="flex items-center justify-center justify-between gap-3 pt-3">
      @auth    
        <div
        class="{{ $bookmark ? 'bg-[#0F6FFF]' : '' }} rounded-[4px] border border-[#666666] p-4 hover:cursor-pointer hover:bg-sky-100"
        id="bookmark"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-bookmark"
          stroke="black"
          viewBox="0 0 16 16"
        >
          <path
            d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"
          />
        </svg>
      </div>
      @endauth
      <div class="rounded-[4px] border border-[#666666] p-4 hover:cursor-pointer hover:bg-sky-100" id="share">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-share-fill"
          viewBox="0 0 16 16"
        >
          <path
            d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5"
          />
        </svg>
      </div>
      <div class="">
        <a
          href="#detail-filter"
          class="items-center rounded-[15px] rounded-lg bg-[#0F6FFF] px-7 py-4 text-center text-[14px] font-light text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
        >
          Pilih Ruangan
        </a>
      </div>
    </div>
  </div>
</div>
<div class="flex flex-row justify-between gap-[85px] px-28 py-6">
  <div class="basis-3/5">
    <h2 class="text-[18px] font-semibold text-[#0021A3]">Overview</h2>
    <div class="text-justify">
      <p class="mt-2 text-[16px] font-normal leading-6 text-[#112211]">
        {{ $workspace->description }}
      </p>
    </div>
    <div class="mt-5 flex gap-4">
      <div class="rounded-[5px] bg-[#A7FBE5] py-3 pl-4 pr-12">
        <p class="text-[32px] font-medium text-[#112211]">{{ $workspace->rating_avg }}</p>
        <p class="text-[14px] font-medium leading-7">Sangat Bagus</p>
        <p class="text-[12px]">{{ $workspace->rating_count }} Ulasan</p>
      </div>
      @foreach ($facilities as $facility)
        @if ($loop->index == 3)
          @break
        @endif

        <div class="flex flex-col justify-between rounded-[5px] border border-[#079D75] pb-3 pl-4 pr-12 pt-5">
          <i class="{{ $facility->icon }} text-[32px]"></i>
          <p class="mt-4 text-[16px]">{{ $facility->name }}</p>
        </div>
      @endforeach
    </div>
  </div>
  <div class="grid basis-2/5 justify-end">
    <h2 class="text-[18px] font-semibold text-[#0021A3]">Lokasi</h2>
    {!! $workspace->maps !!}
  </div>
</div>

@auth    
<script>
  const bookmark = document.getElementById('bookmark');
  const appUrl = '{{ config('app.url') }}';
  console.log(appUrl);

  bookmark.addEventListener('click', () => {
    bookmark.classList.toggle('bg-[#0F6FFF]');

    if (bookmark.classList.contains('bg-[#0F6FFF]')) {
      fetch(`${appUrl}/v1/bookmark/store`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          Accept: 'application/json',
        },
        body: JSON.stringify({
          workspace_id: '{{ $workspace->id }}',
          user_id: '{{ auth()->user()->id }}',
        }),
      })
        .then((response) => response.json())
        .then((data) => {
          showToast('Bookmark berhasil ditambahkan', 'success');
        });
    } else {
      fetch(`${appUrl}/v1/bookmark/destroy`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          Accept: 'application/json',
        },
        body: JSON.stringify({
          workspace_id: '{{ $workspace->id }}',
          user_id: '{{ auth()->user()->id }}',
        }),
      })
        .then((response) => response.json())
        .then((data) => {
          showToast('Bookmark berhasil dihapus', 'success');
        });
    }
  });

  const share = document.getElementById('share');
  share.addEventListener('click', () => {
    navigator.clipboard.writeText(window.location.href);
    showToast('Link berhasil disalin', 'success');
  });
</script>
@endauth
