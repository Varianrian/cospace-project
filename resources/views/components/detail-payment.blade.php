<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-white shadow-sm">
        <div class="flex justify-between px-16 py-5">
            <h1 class="text-xl font-bold text-blue-800"><span class="text-black">Co</span> <span class="text-blue-800">Space</span></h1>
            <nav class="flex gap-5 text-base">
                <a href="#" class="my-auto text-center text-blue-800">Home</a>
                <a href="#" class="flex items-center gap-1 text-emerald-600">
                    <span>Workspace</span>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/696a428319bcb3a2082f0d1bad3a53fa94347653b9efc84b438a3bee78d9b116?apiKey=5f3f9868d33e49c796f9c1903489545e&" alt="" class="w-3.5 h-3.5">
                </a>
                <form action="#" class="flex items-center gap-4 border border-solid border-stone-500 rounded-xl py-1 px-4">
                    <input type="text" placeholder="Temukan coworking space..." aria-label="Search for coworking spaces" class="flex-1">
                    <button type="submit" class="text-white bg-violet-500 px-5 py-3 rounded-xl">Search</button>
                </form>
                <a href="#" class="px-5 py-2 text-center text-white bg-blue-800 rounded-xl">Profil</a>
            </nav>
        </div>
    </header>
    <main class="flex flex-col self-center mt-12 max-w-screen-xl">
        <section class="flex gap-5">
            <div class="flex-1">
                <article class="bg-white p-6 rounded-md border-2 border-solid border-zinc-400">
                    <header class="flex justify-between text-2xl">
                        <h2 class="font-semibold text-black">Coworking</h2>
                        <span class="font-medium text-emerald-600">Rp 15,000.00/Jam</span>
                    </header>
                    <div class="mt-4 flex gap-5 items-center border border-stone-500 rounded-lg p-4">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d6af65efc6b315e02602f5b6439d1af516b72a41f1418f5ee0dbb58d83a2e80e?apiKey=5f3f9868d33e49c796f9c1903489545e&" alt="EduPlex Coworking Space" class="w-16 h-16">
                        <div>
                            <h3 class="text-xl font-medium text-black">EduPlex Coworking Space</h3>
                            <p class="flex items-center text-sm text-stone-500 gap-0.5 mt-2">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/c06fcf130105223a68f2d1f2d6eb8c73dae6743fd9cba3c8ef1eea0b7cd39cbd?apiKey=5f3f9868d33e49c796f9c1903489545e&" alt="" class="w-4.5 h-4.5">
                                Jl. Ir. H. Juanda No.84, Lebakgede
                            </p>
                        </div>
                    </div>
                    <p class="mt-5 text-lg font-medium text-black">Senin, 1 Desember 2024</p>
                    <div class="flex gap-5 mt-5">
                        <div>
                            <p class="text-sm text-stone-500">Check-In</p>
                            <p class="mt-2 text-xl font-medium text-black">13:00 PM</p>
                        </div>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/079a65f459665a870ae5360ecb1bff4b15abfaa5abaafb829490186e7e4361c7?apiKey=5f3f9868d33e49c796f9c1903489545e&" alt="" class="w-12 h-12 mx-auto">
                        <div>
                            <p class="text-sm text-stone-500">Check-Out</p>
                            <p class="mt-2 text-xl font-medium text-black">17:00 PM</p>
                        </div>
                    </div>
                </article>
                <section class="bg-white p-6 rounded-md border-2 border-solid border-zinc-400 mt-9">
                    <header class="py-1.5 text-2xl font-semibold text-black">Identitas Pemesan</header>
                    <div class="mt-4">
                        <div>
                            <label class="text-lg text-stone-500 block">Nama</label>
                            <p class="p-3 rounded border border-black">John Doe</p>
                        </div>
                        <div class="mt-4">
                            <label class="text-lg text-stone-500 block">Email</label>
                            <p class="p-3 rounded border border-black">john.doe@gmail.com</p>
                        </div>
                    </div>
                </section>
            </div>
            <aside class="w-1/3">
                <div class="p-6 bg-white rounded-md border-2 border-solid border-zinc-400 shadow-sm">
                    <div class="flex">
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/208fd94b1028e9b5669d7a5aa54e8ff5a6d79ce7689a4b00221c935bbdf5b2c4?apiKey=5f3f9868d33e49c796f9c1903489545e&" alt="EduPlex Coworking Space" class="w-32 h-auto">
                        <div class="ml-5 flex-1 flex flex-col justify-center">
                            <p class="font-medium text-stone-500">EduPlex Coworking Space</p>
                            <h3 class="text-xl font-semibold text-black">Coworking</h3>
                        </div>
                    </div>
                    <div class="mt-4 h-px bg-neutral-900"></div>
                    <p class="mt-4 text-base font-bold text-black">Proses pembayaran didukung oleh <span class="font-semibold text-black">Midtrans</span></p>
                    <div class="mt-8 flex flex-col text-base text-black">
                        <p class="font-semibold">Detail</p>
                        <div class="flex justify-between mt-2.5">
                            <span>Harga</span>
                            <span class="font-medium">Rp 60,000.00</span>
                        </div>
                        <div class="flex justify-between mt-2.5">
                            <span>Discount</span>
                            <span class="font-medium">Rp 0.00</span>
                        </div>
                        <div class="flex justify-between mt-2.5">
                            <span>Pajak (10%)</span>
                            <span class="font-medium">Rp 6,000.00</span>
                        </div>
                    </div>
                    <div class="mt-4 h-px bg-neutral-900"></div>
                    <div class="flex justify-between mt-4 text-base text-black">
                        <span>Total</span>
                        <span class="font-medium">Rp 66,000.00</span>
                    </div>
                    <div class="flex flex-col items-center mt-12 w-full">
                        <button class="w-44 py-3 mb-5 text-sm font-medium text-white bg-blue-600 rounded-xl shadow-sm">Bayar</button>
                        <button class="w-44 py-3 text-sm font-medium text-white bg-zinc-400 rounded-xl">Lihat Tiket</button>
                    </div>
                </div>
            </aside>
        </section>
    </main>
    <footer class="bg-indigo-950">
        <div class="px-16 py-8 text-white">
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-bold">CoSpace</h2>
                <nav class="text-base text-center">
                    <div class="mb-4">Home</div>
                    <div class="mb-4">Workspace</div>
                    <div>Profil</div>
                </nav>
                <div>Contact Us (Partnership)</div>
            </div>
            <p class="pt-3 mt-6 text-base font-medium text-zinc-100">&copy; 2024 Copyright. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>