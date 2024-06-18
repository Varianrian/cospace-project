<div>
  <div class="flex flex-col items-center">
    <h1 class="mt-5 text-[24px] font-bold">John Doe</h1>
    <p class="mb-4 text-[#112211]">john.doe@gmail.com</p>
    <div class="inline-flex rounded-md shadow-lg" role="group">
      <a href="{{ route('profile') }}">
        <button
          type="button"
          class="rounded-s-lg border border-black bg-transparent px-40 py-5 text-sm font-medium text-[#079D75] hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-white focus:text-[#079D75]"
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
          class="rounded-e-lg border border-gray-900 bg-transparent px-40 py-5 text-sm font-medium text-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-gray-900 focus:text-white focus:ring-2 focus:ring-gray-500"
        >
          Bookmark
        </button>
      </a>
    </div>
  </div>
  <div class="px-20 py-10">
    <h2 class="text-[22px] font-semibold">Pengaturan Akun</h2>
    <form class="" action="{{ route('profile.update') }}" method="POST" id="profile-form">
      <div class="grid grid-cols-2">
        <div class="pr-3">
          <div class="mb-4 mt-5">
            <label for="name" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">Username</label>
            <input
              type="text"
              id="name"
              name="name"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="John Doe"
              value="{{ auth()->user()->name }}"
              required
            />
          </div>
          <div class="mb-4 mt-5">
            <label for="email" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              class="block w-full rounded-lg border border-gray-300 bg-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="johndoe@mail.com"
              value="{{ auth()->user()->email }}"
              disabled
              required
            />
          </div>
          <div class="mb-4">
            <label for="phone" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">
              Nomor Telepon
            </label>
            <input
              type="text"
              id="phone"
              name="phone"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="08123456789"
              required
              value="{{ $profile ? $profile->phone : null }}"
            />
          </div>
        </div>
        <div class="pl-3">
          <div class="mb-4 mt-5">
            <label for="address" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <input
              type="text"
              id="address"
              name="address"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="Jl. Jend. Sudirman No. 1"
              required
              value="{{ $profile ? $profile->address : null }}"
            />
          </div>
          <div class="mb-4 mt-5">
            <label for="job" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
            <input
              type="text"
              id="job"
              name="job"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="Mahasiswa"
              required
              value="{{ $profile ? $profile->job : null }}"
            />
          </div>
          <div class="mb-4">
            <label for="birthday" class="mb-1 block text-sm font-medium text-gray-900 dark:text-white">
              Tanggal Lahir
            </label>
            <input
              type="date"
              id="birthday"
              name="birthday"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="12-08-2023"
              required
              value="{{ $profile ? $profile->birthday : null }}"
            />
          </div>
        </div>
      </div>
      <div class="flex items-center justify-center gap-5">
        <button
          type="submit"
          class="mt-3 w-full rounded-lg bg-[#0F6FFF] px-5 py-2.5 text-center text-[14px] font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
        >
          Simpan Perubahan
        </button>
        <button
          type="button"
          onclick="document.getElementById('profile-form').reset()"
          class="mt-3 w-full rounded-lg border border-[#000000] bg-white px-14 py-2.5 text-center text-[14px] font-medium text-black hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
        >
          Batal
        </button>
      </div>
    </form>
    <div class="lg:w-1/2 lg:pr-3" id="password-section">
      <h2 class="text-[22px] font-semibold">Ubah Password</h2>
      <form class="" action="{{ route('profile.change-password') }}" method="POST" id="password-form">
        <div class="mb-4 mt-5">
          <label for="current-password" class="mb-2 block text-sm font-medium text-[#666666]">Password Saat Ini</label>
          <div class="relative flex flex-col justify-center text-stone-500">
            <input
              type="password"
              id="current-password"
              name="current_password"
              class="rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="Masukkan Password Anda"
              required
            />
            <i
              class="fas fa-eye-slash absolute right-5 top-1/2 w-[18px] -translate-y-1/2 transform cursor-pointer text-black"
              id="toggleCurrentPassword"
            ></i>
          </div>
        </div>
        <div class="mt-4 w-full text-right text-sm text-stone-500 underline max-md:max-w-full">
          <a href="">Lupa Password?</a>
        </div>
        <div class="mb-4 mt-5">
          <label for="password" class="mb-2 block text-sm font-medium text-[#666666]">Password Baru</label>
          <div class="relative flex flex-col justify-center text-stone-500">
            <input
              type="password"
              id="password"
              name="password"
              class="rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="Masukkan Password Baru"
              required
            />
            <i
              class="fas fa-eye-slash absolute right-5 top-1/2 w-[18px] -translate-y-1/2 transform cursor-pointer text-black"
              id="togglePassword"
            ></i>
          </div>
        </div>
        @error('password')
          <div class="text-sm text-red-500">{{ $message }}</div>
        @enderror

        <div class="mb-4 mt-5">
          <label for="confirm-password" class="mb-2 block text-sm font-medium text-[#666666]">Password Saat Ini</label>
          <div class="relative flex flex-col justify-center text-stone-500">
            <input
              type="password"
              id="confirm-password"
              name="password_confirmation"
              class="rounded-lg border border-gray-300 bg-gray-50 p-2.5 pr-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
              placeholder="Konfirmasi Password Baru"
              required
            />
            <i
              class="fas fa-eye-slash absolute right-5 top-1/2 w-[18px] -translate-y-1/2 transform cursor-pointer text-black"
              id="toggleConfirmPassword"
            ></i>
          </div>
        </div>
        <div class="flex items-center justify-center gap-5">
          <button
            type="submit"
            class="mt-3 w-full rounded-lg bg-[#0F6FFF] px-5 py-2.5 text-center text-[14px] font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
          >
            Simpan Perubahan
          </button>
          <button
            type="button"
            onclick="document.getElementById('password-form').reset()"
            class="mt-3 w-full rounded-lg border border-[#000000] bg-white px-14 py-2.5 text-center text-[14px] font-medium text-black hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
          >
            Batal
          </button>
        </div>
      </form>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const togglePasswordVisibility = (toggleId, inputId) => {
          const toggleIcon = document.getElementById(toggleId);
          const passwordInput = document.getElementById(inputId);

          toggleIcon.addEventListener('click', function () {
            const isPasswordHidden = passwordInput.type === 'password';
            passwordInput.type = isPasswordHidden ? 'text' : 'password';
            toggleIcon.classList.toggle('fa-eye', isPasswordHidden);
            toggleIcon.classList.toggle('fa-eye-slash', !isPasswordHidden);
          });
        };

        togglePasswordVisibility('toggleCurrentPassword', 'current-password');
        togglePasswordVisibility('togglePassword', 'password');
        togglePasswordVisibility('toggleConfirmPassword', 'confirm-password');
      });
    </script>
    <div class="mt-16">
      <div class="flex items-center justify-end gap-5">
        <button
          type="submit"
          class="mt-3 w-full rounded-lg bg-[#0021A3] px-14 py-2.5 text-center text-[14px] font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
        >
          Keluar
        </button>
        <button
          type="submit"
          class="mt-3 w-full rounded-lg border border-[#000000] bg-white px-10 py-2.5 text-center text-[14px] font-medium text-black hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto"
        >
          Hapus Akun
        </button>
      </div>
    </div>
  </div>
</div>
