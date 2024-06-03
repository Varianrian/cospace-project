<div class="rekomendasi px-3 py-4 min-h-[371px] h-fit w-[200px] lg:w-[300px] bg-white border border-[#B3B3B3] rounded-[10px]">
    <div class="w-full h-[50%]">
        <img class="rounded-t-lg w-full h-full overflow-hidden object-cover" src="{{ $image }}" alt=" " />
    </div>
    <div class="pt-5 px-2">
        <a href="#">
            <h5 class="text-[16px] font-medium tracking-tight text-black"> {{ $name }}</h5>
        </a>
        <p class="mb-1 text-xs text-black">{{ $address }}</p>
        <p class="mb-1 text-xs text-gray-500">{{ $cost }}</p>
        <div class="flex items-center">
            @for($i = 0; $i < 5; $i++)
                <svg class="w-4 h-4 text-[#FFA217] me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill=" currentColor" viewBox="0 0 22 20">
                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                </svg>
            @endfor
            <p class="ms-1 text-xs  text-black">{{ $rating }}</p>
            <p class="ms-1 text-xs  text-black">{{ $ulasan }}</p>
        </div>
        <div class="flex justify-end">
            <a href="{{ route('workspaceDetail') }}" class="mt-4 inline-flex items-center px-5 py-2 text-[14px] font-light text-center text-white bg-[#0021A3] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Lihat
            </a>
        </div>
    </div>
    
</div>