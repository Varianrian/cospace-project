<section class="flex flex-col px-28">
    <div
        class="w-full justify-center whitespace-nowrap px-5 text-center text-2xl font-semibold text-blue-800 max-md:max-w-full">
        Ulasan
    </div>
    <div class="mt-8 w-full rounded-md px-12 max-md:max-w-full max-md:px-5">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
            <article class="flex w-6/12 flex-col max-md:ml-0 max-md:w-full">
                <section
                    class="flex w-full flex-col justify-center rounded-md bg-indigo-200 max-md:mt-10 max-md:max-w-full">
                    <div class="rounded-md p-4 max-md:max-w-full">
                        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                            <div class="flex w-[77%] flex-col max-md:ml-0 max-md:w-full">
                                <div
                                    class="flex grow flex-col justify-center whitespace-nowrap text-right text-sm font-medium tracking-normal text-black max-md:mt-10">
                                    <div class="flex items-center gap-1">
                                        <div class="self-stretch">5</div>
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2d18e51a539e9a42700269a07a6a11d3ac462dbe716cbe018d455bcdabab7c8?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                                            alt="Rating of 5 stars"
                                            class="my-auto aspect-square w-4 shrink-0 self-stretch fill-yellow-500" />
                                        <div class="my-auto h-1.5 flex-1 shrink-0 self-stretch rounded-sm bg-blue-800">
                                        </div>
                                    </div>
                                    <div class="mt-2 flex items-center gap-1 pr-4">
                                        <div class="self-stretch">4</div>
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2d18e51a539e9a42700269a07a6a11d3ac462dbe716cbe018d455bcdabab7c8?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                                            alt="Rating of 4 stars"
                                            class="my-auto aspect-square w-4 shrink-0 self-stretch fill-yellow-500" />
                                        <div
                                            class="my-auto h-1.5 w-[280px] max-w-full shrink-0 self-stretch rounded-sm bg-blue-800">
                                        </div>
                                    </div>
                                    <div class="mt-2 flex items-center gap-1 pr-20 max-md:pr-5">
                                        <div class="self-stretch">3</div>
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2d18e51a539e9a42700269a07a6a11d3ac462dbe716cbe018d455bcdabab7c8?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                                            alt="Rating of 3 stars"
                                            class="my-auto aspect-square w-4 shrink-0 self-stretch fill-yellow-500" />
                                        <div
                                            class="my-auto h-1.5 w-[60px] shrink-0 self-stretch rounded-sm bg-blue-800">
                                        </div>
                                    </div>
                                    <div class="mt-2 flex items-center gap-1 pr-20 max-md:pr-5">
                                        <div class="self-stretch">2</div>
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2d18e51a539e9a42700269a07a6a11d3ac462dbe716cbe018d455bcdabab7c8?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                                            alt="Rating of 2 stars"
                                            class="my-auto aspect-square w-4 shrink-0 self-stretch fill-yellow-500" />
                                        <div
                                            class="my-auto h-1.5 w-[19px] shrink-0 self-stretch rounded-sm bg-blue-800">
                                        </div>
                                    </div>
                                    <div class="mt-2 flex gap-1 pr-20 text-center max-md:pr-5">
                                        <div>1</div>
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2d18e51a539e9a42700269a07a6a11d3ac462dbe716cbe018d455bcdabab7c8?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                                            alt="Rating of 1 star"
                                            class="my-auto aspect-square w-4 shrink-0 fill-yellow-500" />
                                    </div>
                                </div>
                            </div>
                            <div class="ml-5 flex w-[23%] flex-col max-md:ml-0 max-md:w-full">
                                <div class="flex flex-col justify-center max-md:mt-10">
                                    <div class="text-center text-[40px] font-bold tracking-tight text-black">
                                        {{ $workspace->rating_avg }}</div>
                                    <div class="flex items-center">
                                        @for ($i = 0; $i < $workspace->rating_avg; $i++)
                                            <svg class="me-1 h-4 w-4 text-[#FFA217]" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill=" currentColor"
                                                viewBox="0 0 22 20">
                                                <path
                                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                        @endfor
                                    </div>
                                    <div class="mt-2 text-center text-[14px] font-medium tracking-normal text-black">
                                        {{ $workspace->rating_count }} Ulasan</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <section class="ml-5 flex w-6/12 flex-col max-md:ml-0 max-md:w-full">
                <div class="flex grow flex-col text-zinc-800 max-md:mt-10 max-md:max-w-full">
                    @foreach ($reviews as $review)
                        <article
                            class="flex flex-col justify-end rounded-md border border-solid border-indigo-200 bg-white p-4 max-md:max-w-full">
                            <div class="flex justify-center gap-4 max-md:flex-wrap">
                                <div class="flex flex-1 justify-center gap-2">
                                    <img loading="lazy" src="/assets/images/ppUlasan.png"
                                        alt="Courtney Henry's profile picture"
                                        class="my-auto aspect-square w-[38px] shrink-0 rounded-full" />
                                    <div class="flex flex-1 flex-col">
                                        <div class="text-[16px] text-base font-medium">{{ $review->user->name }}</div>
                                        <div class="flex items-center">
                                            <div class="flex">
                                                @for ($i = 0; $i < $review->rating; $i++)
                                                    <svg class="me-1 h-4 w-4 text-[#FFA217]" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 22 20">
                                                        <path
                                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                    </svg>
                                                @endfor
                                            </div>
                                            <span class="ml-2 text-[14px]">{{ $review->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-2.5 text-[13px] leading-5 max-md:max-w-full">
                                {{ $review->comment }}
                            </p>
                        </article>
                        <div class="mt-5 h-px shrink-0 border border-solid border-zinc-500 max-md:max-w-full"></div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</section>
