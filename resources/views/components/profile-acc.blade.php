<div>
    <div class="flex flex-col items-center">
        <h1 class="mt-5 font-bold text-[24px]">John Doe</h1>
        <p class="mb-4 text-[#112211]">john.doe@gmail.com</p>
        <div class="inline-flex rounded-md shadow-lg" role="group">
            <a href="{{ route('profile') }}">
                <button type="button" class="px-40 py-5 text-sm font-medium text-[#079D75] bg-transparent border border-black rounded-s-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:bg-white focus:text-[#079D75]">
                    Pengaturan Akun
                </button>
            </a>
            <a href="{{ route('profileReservation') }}">
                <button type="button" class="px-40 py-5 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                    Reservasi Saya
                </button>
            </a>
            <a href="{{ route('profileBooking') }}">
                <button type="button" class="px-40 py-5 text-sm font-medium text-gray-900 bg-transparent border border-gray-900 rounded-e-lg hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white">
                    Bookmark
                </button>
            </a>
        </div>
    </div>
    <div class="py-10 px-20">
        <h2 class="text-[22px] font-semibold">Pengaturan Akun</h2>
        <form class="">
            <div class="grid grid-cols-2">
                <div class="pr-3">
                    <div class="mt-5 mb-4">
                        <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John Doe" required />
                    </div>
                    <div class="mt-5 mb-4">
                        <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@gmail.com" required />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="08123456789" required />
                    </div>
                </div>
                <div class="pl-3">
                    <div class="mt-5 mb-4">
                        <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Bandung" required />
                    </div>
                    <div class="mt-5 mb-4">
                        <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Mahasiswa" required />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="12-08-2023" required />
                    </div>
                </div>
            </div>
        </form>
        <div class="flex gap-5 justify-center items-center">
            <button type="submit" class="text-white bg-[#0F6FFF] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[14px] w-full sm:w-auto mt-3 px-5 py-2.5 text-center">Simpan Perubahan</button>
            <button type="submit" class="text-black bg-white border border-[#000000] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[14px] w-full sm:w-auto mt-3 px-14 py-2.5 text-center">Batal</button>
        </div>
    <div class="lg:w-1/2 lg:pr-3">
        <h2 class="text-[22px] font-semibold">Ubah Password</h2>
        <div class="mt-5 mb-4">
            <label for="email" class="block mb-2 text-sm font-medium text-[#666666]">Password Saat Ini</label>
            <div class="relative flex flex-col justify-center text-stone-500">
                <input type="password" id="current-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 pr-10" placeholder="Masukkan Password Anda" required />
                <i class="fas fa-eye-slash absolute right-5 top-1/2 transform -translate-y-1/2 w-[18px] cursor-pointer text-black" id="toggleCurrentPassword"></i>
            </div>
        </div>
        <div class="mt-4 w-full text-right underline text-stone-500 max-md:max-w-full text-sm"> 
            <a href="">Lupa Password?</a> 
        </div>
        <div class="mt-5 mb-4">
            <label for="email" class="block mb-2 text-sm font-medium text-[#666666]">Password Baru</label>
            <div class="relative flex flex-col justify-center text-stone-500">
                <input type="password" id="current-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 pr-10" placeholder="Masukkan Password Baru" required />
                <i class="fas fa-eye-slash absolute right-5 top-1/2 transform -translate-y-1/2 w-[18px] cursor-pointer text-black" id="toggleCurrentPassword"></i>
            </div>
        </div>

        <div class="mt-5 mb-4">
            <label for="email" class="block mb-2 text-sm font-medium text-[#666666]">Password Saat Ini</label>
            <div class="relative flex flex-col justify-center text-stone-500">
                <input type="password" id="current-password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 pr-10" placeholder="Konfirmasi Password Baru" required />
                <i class="fas fa-eye-slash absolute right-5 top-1/2 transform -translate-y-1/2 w-[18px] cursor-pointer text-black" id="toggleCurrentPassword"></i>
            </div>
        </div>
        <div class="flex gap-5 justify-center items-center">
            <button type="submit" class="text-white bg-[#0F6FFF] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[14px] w-full sm:w-auto mt-3 px-5 py-2.5 text-center">Simpan Perubahan</button>
            <button type="submit" class="text-black bg-white border border-[#000000] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[14px] w-full sm:w-auto mt-3 px-14 py-2.5 text-center">Batal</button>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const togglePasswordVisibility = (toggleId, inputId) => {
                    const toggleIcon = document.getElementById(toggleId);
                    const passwordInput = document.getElementById(inputId);
        
                    toggleIcon.addEventListener('click', function() {
                        const isPasswordHidden = passwordInput.type === 'password';
                        passwordInput.type = isPasswordHidden ? 'text' : 'password';
                        toggleIcon.classList.toggle('fa-eye', isPasswordHidden);
                        toggleIcon.classList.toggle('fa-eye-slash', !isPasswordHidden);
                    });
                };
        
                togglePasswordVisibility('toggleCurrentPassword', 'current-password');
                togglePasswordVisibility('toggleNewPassword', 'new-password');
                togglePasswordVisibility('toggleConfirmPassword', 'confirm-password');
            });
        </script> 
    </div>
    <div class="mt-16">
        <div class="flex gap-5 justify-end items-center">
            <button type="submit" class="text-white bg-[#0021A3] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[14px] w-full sm:w-auto mt-3 px-14 py-2.5 text-center">Keluar</button>
            <button type="submit" class="text-black bg-white border border-[#000000] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-[14px] w-full sm:w-auto mt-3 px-10 py-2.5 text-center">Hapus Akun</button>
        </div>
    </div>
</div>