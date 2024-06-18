<div class="px-4 pt-12 lg:px-24">
  <h5 class="font-bold text-black lg:text-[26px]">Testimoni</h5>
  <p class="mb-6 text-left text-[16px] font-light text-[#666666]">Pendapat Mereka tentang CoSpace</p>
  <div class="flex flex-col items-center gap-y-4 sm:flex-row sm:justify-center lg:gap-8">
    <x-testimoni-card
      name="Olivia"
      job="Freelancer"
      review="Pemesanan di CoSpace cepat dan
            mudah! Saya dapat dengan lancar
            merencanakan kegiatan saya."
    />
    <div class="rounded-[5px] border-[1px] border-[#211951] bg-white p-7">
      <h5 class="font-medium text-black lg:text-[16px] xl:text-[20px]">Alaina</h5>
      <p class="text-left font-light text-[#666666] lg:text-[12px] xl:text-[16px]">Worker</p>
      <div class="flex items-center">
        @for ($i = 0; $i < 5; $i++)
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
        @endfor
      </div>
      <p class="mt-3 text-[14px] text-black">
        Pelayanan pemesanan CoSpace sangat baik. Saya mendapat ruang sesuai kebutuhan tanpa repot
      </p>
    </div>
    <x-testimoni-card
      name="Conan"
      job="Event Organizer"
      review="Dengan fleksibilitas CoSpace dalam memilih ruang, saya dengan mudah mengadakan acara tanpa kendala."
    />
  </div>
</div>
