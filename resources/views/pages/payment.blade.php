@extends('layouts.app')

@section('content')
  <form id="paymentForm">
    <div class="mt-12 flex flex-col self-center">
      <section class="flex gap-5 px-9">
        <div class="flex-1">
          <article class="rounded-md border-2 border-solid border-zinc-400 bg-white p-6">
            <header class="flex justify-between text-2xl">
              <h2 class="font-semibold text-black">Pesan Ruangan</h2>
              <span class="font-medium text-emerald-600">Rp {{ number_format($room->price, 0, ',', '.') }}/Jam</span>
            </header>
            <div class="mt-4 flex items-center gap-5 rounded-lg border border-stone-500 p-4">
              <div class="h-16 w-16 overflow-hidden rounded-lg">
                <img alt="EduPlex Coworking Space" class="h-full w-full" src="{{ $workspace->mediaUrls ? $workspace->mediaUrls[0] : 'https://via.placeholder.com/150' }}" />
              </div>
              <div>
                <h3 class="text-xl font-medium text-black">{{ $workspace->name }}</h3>
                <p class="mt-2 flex items-center gap-0.5 text-sm text-stone-500">
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/c06fcf130105223a68f2d1f2d6eb8c73dae6743fd9cba3c8ef1eea0b7cd39cbd?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                    alt=""
                    class="w-4.5 h-4.5"
                  />
                  {{ $workspace->address }}
                </p>
              </div>
            </div>
            <label for="date" class="mb-2 mt-5 block text-sm font-medium text-gray-900">Tanggal</label>
            <input
              datepicker
              id="date"
              name="date"
              type="date"
              class="block rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="MM/DD/YY"
              required
              min="{{ $start_date }}"
            />
            <div class="mt-5 flex gap-5">
              <div>
                <label for="start-time" class="mb-2 block text-sm font-medium text-gray-900">Check In</label>
                <div class="">
                  <input
                    type="time"
                    name="start-time"
                    id="start-time"
                    class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-left text-sm leading-none text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                    min="09:00"
                    max="18:00"
                    value="09:00"
                    required
                  />
                </div>
              </div>
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/079a65f459665a870ae5360ecb1bff4b15abfaa5abaafb829490186e7e4361c7?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                alt=""
                class="mx-auto h-12 w-12"
              />
              <div>
                <label for="end-time" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                  Check Out
                </label>
                <div class="relative">
                  <input
                    type="time"
                    name="end-time"
                    id="end-time"
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm leading-none text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                    min="09:00"
                    max="18:00"
                    value="10:00"
                    required
                  />
                </div>
              </div>
            </div>
          </article>
        </div>
        <aside class="w-1/3">
          <div class="rounded-md border-2 border-solid border-zinc-400 bg-white p-6 shadow-sm">
            <div class="flex">
              <img
                alt="EduPlex Coworking Space"
                class="h-32 w-32 rounded-lg object-cover"
                src="{{ $room->mediaUrls ? $room->mediaUrls[0] : 'https://via.placeholder.com/150' }}"
              />
              <div class="ml-5 flex flex-1 flex-col justify-center">
                <p class="font-medium text-stone-500">{{ $workspace->name }}</p>
                <h3 class="text-xl font-semibold text-black">{{ $room->name }}</h3>
              </div>
            </div>
            <div class="mt-4 h-px bg-neutral-900"></div>
            <p class="mt-4 text-base font-bold text-black">
              Proses pembayaran didukung oleh
              <span class="font-semibold text-black">Midtrans</span>
            </p>
            <div class="mt-8 flex flex-col text-base text-black">
              <p class="font-semibold">Detail</p>
              <div class="mt-2.5 flex justify-between">
                <span>Harga</span>
                <span class="font-medium">
                  Rp
                  <span id="price">{{ number_format($room->price, 0, ',', '.') }}</span>
                </span>
              </div>
              <div class="mt-2.5 flex justify-between">
                <span>Pajak (10%)</span>
                <span class="font-medium">
                  Rp
                  <span id="tax">{{ number_format($room->price * 0.1, 0, ',', '.') }}</span>
                </span>
              </div>
            </div>
            <div class="mt-4 h-px bg-neutral-900"></div>
            <div class="mt-4 flex justify-between text-base text-black">
              <span>Total</span>
              <span class="font-medium">
                Rp
                <span id="total">{{ number_format($room->price * 1.1, 0, ',', '.') }}</span>
              </span>
            </div>
            <div class="mt-12 flex w-full flex-col items-center justify-center" id="button-container">
              <button
                type="submit"
                id="pay-button"
                class="mb-5 flex w-44 justify-center rounded-xl bg-blue-600 py-3 text-sm font-medium text-white shadow-sm"
                form="paymentForm"
              >
                Bayar
              </button>
              <a
                href="{{route('profileBooking')}}"
                class="flex hidden w-44 justify-center rounded-xl bg-zinc-400 py-3 text-sm font-medium text-white"
                id="view-ticket"
              >
                Lihat Tiket
              </a>
            </div>
          </div>
        </aside>
      </section>
    </div>
  </form>

  <script>
    const appUrl = '{{ config('app.url') }}';
    const payButton = document.getElementById('pay-button');
    const viewTicketButton = document.getElementById('view-ticket');

    document.getElementById('start-time').addEventListener('change', function (event) {
      const startTime = event.target.value;
      const endTime = document.getElementById('end-time').value;
      const price = document.getElementById('price');
      const tax = document.getElementById('tax');
      const total = document.getElementById('total');

      if (startTime >= endTime) {
        showToast('Start time must be less than end time', 'error');
        return;
      }

      if (startTime < '09:00') {
        showToast('Start time must be greater than or equal to 09:00', 'error');
        return;
      }

      const start = new Date(`01/01/2021 ${startTime}`);
      const end = new Date(`01/01/2021 ${endTime}`);

      const diff = end - start;
      const hours = Math.ceil(diff / 1000 / 60 / 60);

      console.log(hours, {{ $room->price }}), hours * {{ $room->price }};
      price.textContent = new Intl.NumberFormat('id-ID').format(hours * {{ $room->price }});
      tax.textContent = new Intl.NumberFormat('id-ID').format(hours * {{ $room->price }} * 0.1);
      total.textContent = new Intl.NumberFormat('id-ID').format(hours * {{ $room->price }} * 1.1);
    });

    document.getElementById('end-time').addEventListener('change', function (event) {
      const endTime = event.target.value;
      const startTime = document.getElementById('start-time').value;
      const price = document.getElementById('price');
      const tax = document.getElementById('tax');
      const total = document.getElementById('total');

      if (startTime >= endTime) {
        showToast('Start time must be less than end time', 'error');
        return;
      }

      if (endTime > '18:00') {
        showToast('End time must be less than or equal to 18:00', 'error');
        return;
      }

      const start = new Date(`01/01/2021 ${startTime}`);
      const end = new Date(`01/01/2021 ${endTime}`);

      const diff = end - start;
      const hours = Math.ceil(diff / 1000 / 60 / 60);

      console.log(hours, {{ $room->price }}), hours * {{ $room->price }};
      price.textContent = new Intl.NumberFormat('id-ID').format(hours * {{ $room->price }});
      tax.textContent = new Intl.NumberFormat('id-ID').format(hours * {{ $room->price }} * 0.1);
      total.textContent = new Intl.NumberFormat('id-ID').format(hours * {{ $room->price }} * 1.1);
    });

    document.getElementById('paymentForm').addEventListener('submit', async function (event) {
      event.preventDefault();

      const data = {
        workspace_id: '{{ $workspace->id }}',
        user_id: '{{ auth()->user()->id }}',
        workspace_room_id: '{{ $room->id }}',
        date: document.getElementById('date').value,
        start_time: document.getElementById('start-time').value,
        end_time: document.getElementById('end-time').value,
      };

      //validate data
      if (!data.date || !data.start_time || !data.end_time) {
        showToast('Please fill all fields', 'error');
        return;
      }

      if (data.date < '{{ $start_date }}') {
        showToast('Date must be greater than or equal to today', 'error');
        return;
      }

      console.log(data);

      if (data.start_time >= data.end_time) {
        showToast('Start time must be less than end time', 'error');
        return;
      }

      disableButton();

      const response = await fetch(`${appUrl}/v1/payment/charge`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          Accept: 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        body: JSON.stringify(data),
      }).catch((error) => {
        console.error('Error:', error);
        showToast('An error occurred', 'error');
        enableButton();
      });

      const result = await response.json();
      console.log(result.data);
      if (result.status === 'error') {
        showToast('An error occurred', 'error');
        return;
      }
      if (result.errors) {
        showToast(result.message, 'error');
        enableButton();
        return;
      }

      snap.pay(result.data.token, {
        onSuccess: function (result) {
          showToast('Payment successful', 'success');
          disableButton('Payment successful');
          showTicket();
          console.log(result);
        },
        onPending: function (result) {
          console.log('pending');
          console.log(result);
        },
        onError: function (result) {
          showToast('Payment failed', 'error');
          enableButton();
          console.log(result);
        },
        onClose: function () {
          console.log('customer closed the popup without finishing the payment');
          enableButton();
        },
      });
    });

    function disableButton(message = 'Processing...') {
      payButton.disabled = true;
      payButton.textContent = message;
      payButton.classList.add('cursor-not-allowed', 'opacity-50');
    }

    function enableButton() {
      payButton.disabled = false;
      payButton.textContent = 'Bayar';
      payButton.classList.remove('cursor-not-allowed', 'opacity-50');
    }

    function showTicket() {
      viewTicketButton.classList.remove('hidden');
    }
  </script>
@endsection
