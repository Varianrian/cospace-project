<div class="bgfaq mt-12 mb-12 mx-24 h-108 rounded-lg bg-emerald-600 object-cover">
    <div class="grid grid-cols-2">
        <div class="faq-kiri">
            <h5 class="pl-5 pt-12 ml-12 text-xl text-left font-bold text-white md:text-xl lg:text-xl">Pertanyaan Sering Diajukan</h5>
            <p class="pl-5 mt-2 ml-12 text-xs text-left font-light text-white lg:text-sm ">Temukan jawaban yang cepat untuk <br>pertanyaan umum mengenai layanan kami.</p>
        </div>
        <div id="accordion-nested-parent" data-accordion="collapse" class="my-12 mr-12 bg-white rounded-lg ">
            <div id="accordion-nested-collapse" data-accordion="collapse">
                <h2 id="accordion-nested-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-grey-500" data-accordion-target="#accordion-nested-collapse-body-1" aria-expanded="false" aria-controls="accordion-nested-collapse-body-1">
                        <span class="text-indigo-950">Pertanyaan 1?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-0 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path class="plus" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 7h10M7 2v10"/>
                            <path class="minus hidden" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 7h10"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-nested-collapse-body-1" class="hidden" aria-labelledby="accordion-nested-collapse-heading-1">
                    <div class="p-5 pt-0">
                        <p class="text-black">Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor (jawaban).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Dapatkan tombol yang ditekan
    const accordionButton = document.querySelector('[data-accordion-target="#accordion-nested-collapse-body-1"]');

    // Dapatkan bagian yang bisa di-collapse dan di-expand
    const accordionCollapseBody = document.getElementById('accordion-nested-collapse-body-1');

    // Dapatkan ikon plus dan minus
    const plusIcon = document.querySelector('.plus');
    const minusIcon = document.querySelector('.minus');

    // Tambahkan event listener ke tombol
    accordionButton.addEventListener('click', () => {
        // Periksa apakah bagian sudah tersembunyi atau belum
        const isHidden = accordionCollapseBody.classList.contains('hidden');

        // Ubah kelasnya berdasarkan statusnya
        if (isHidden) {
            accordionCollapseBody.classList.remove('hidden');
            plusIcon.classList.add('hidden');
            minusIcon.classList.remove('hidden');
        } else {
            accordionCollapseBody.classList.add('hidden');
            plusIcon.classList.remove('hidden');
            minusIcon.classList.add('hidden');
        }
    });
</script>
