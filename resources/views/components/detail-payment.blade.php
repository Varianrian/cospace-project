<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet" />
  </head>

  <body>
    <header class="bg-white shadow-sm">
      <div class="flex justify-between px-16 py-5">
        <h1 class="text-xl font-bold text-blue-800">
          <span class="text-black">Co</span>
          <span class="text-blue-800">Space</span>
        </h1>
        <nav class="flex gap-5 text-base">
          <a href="#" class="my-auto text-center text-blue-800">Home</a>
          <a href="#" class="flex items-center gap-1 text-emerald-600">
            <span>Workspace</span>
            <img
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/696a428319bcb3a2082f0d1bad3a53fa94347653b9efc84b438a3bee78d9b116?apiKey=5f3f9868d33e49c796f9c1903489545e&"
              alt=""
              class="h-3.5 w-3.5"
            />
          </a>
          <form action="#" class="flex items-center gap-4 rounded-xl border border-solid border-stone-500 px-4 py-1">
            <input
              type="text"
              placeholder="Temukan coworking space..."
              aria-label="Search for coworking spaces"
              class="flex-1"
            />
            <button type="submit" class="rounded-xl bg-violet-500 px-5 py-3 text-white">Search</button>
          </form>
          <a href="#" class="rounded-xl bg-blue-800 px-5 py-2 text-center text-white">Profil</a>
        </nav>
      </div>
    </header>
    <main class="mt-12 flex max-w-screen-xl flex-col self-center">
      <section class="flex gap-5">
        <div class="flex-1">
          <article class="rounded-md border-2 border-solid border-zinc-400 bg-white p-6">
            <header class="flex justify-between text-2xl">
              <h2 class="font-semibold text-black">Coworking</h2>
              <span class="font-medium text-emerald-600">Rp 15,000.00/Jam</span>
            </header>
            <div class="mt-4 flex items-center gap-5 rounded-lg border border-stone-500 p-4">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/d6af65efc6b315e02602f5b6439d1af516b72a41f1418f5ee0dbb58d83a2e80e?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                alt="EduPlex Coworking Space"
                class="h-16 w-16"
              />
              <div>
                <h3 class="text-xl font-medium text-black">EduPlex Coworking Space</h3>
                <p class="mt-2 flex items-center gap-0.5 text-sm text-stone-500">
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/c06fcf130105223a68f2d1f2d6eb8c73dae6743fd9cba3c8ef1eea0b7cd39cbd?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                    alt=""
                    class="w-4.5 h-4.5"
                  />
                  Jl. Ir. H. Juanda No.84, Lebakgede
                </p>
              </div>
            </div>
            <p class="mt-5 text-lg font-medium text-black">Senin, 1 Desember 2024</p>
            <div class="mt-5 flex gap-5">
              <div>
                <p class="text-sm text-stone-500">Check-In</p>
                <p class="mt-2 text-xl font-medium text-black">13:00 PM</p>
              </div>
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/079a65f459665a870ae5360ecb1bff4b15abfaa5abaafb829490186e7e4361c7?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                alt=""
                class="mx-auto h-12 w-12"
              />
              <div>
                <p class="text-sm text-stone-500">Check-Out</p>
                <p class="mt-2 text-xl font-medium text-black">17:00 PM</p>
              </div>
            </div>
          </article>
          <section class="mt-9 rounded-md border-2 border-solid border-zinc-400 bg-white p-6">
            <header class="py-1.5 text-2xl font-semibold text-black">Identitas Pemesan</header>
            <div class="mt-4">
              <div>
                <label class="block text-lg text-stone-500">Nama</label>
                <p class="rounded border border-black p-3">John Doe</p>
              </div>
              <div class="mt-4">
                <label class="block text-lg text-stone-500">Email</label>
                <p class="rounded border border-black p-3">john.doe@gmail.com</p>
              </div>
            </div>
          </section>
        </div>
        <aside class="w-1/3">
          <div class="rounded-md border-2 border-solid border-zinc-400 bg-white p-6 shadow-sm">
            <div class="flex">
              <img
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/208fd94b1028e9b5669d7a5aa54e8ff5a6d79ce7689a4b00221c935bbdf5b2c4?apiKey=5f3f9868d33e49c796f9c1903489545e&"
                alt="EduPlex Coworking Space"
                class="h-auto w-32"
              />
              <div class="ml-5 flex flex-1 flex-col justify-center">
                <p class="font-medium text-stone-500">EduPlex Coworking Space</p>
                <h3 class="text-xl font-semibold text-black">Coworking</h3>
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
                <span class="font-medium">Rp 60,000.00</span>
              </div>
              <div class="mt-2.5 flex justify-between">
                <span>Discount</span>
                <span class="font-medium">Rp 0.00</span>
              </div>
              <div class="mt-2.5 flex justify-between">
                <span>Pajak (10%)</span>
                <span class="font-medium">Rp 6,000.00</span>
              </div>
            </div>
            <div class="mt-4 h-px bg-neutral-900"></div>
            <div class="mt-4 flex justify-between text-base text-black">
              <span>Total</span>
              <span class="font-medium">Rp 66,000.00</span>
            </div>
            <div class="mt-12 flex w-full flex-col items-center">
              <button class="mb-5 w-44 rounded-xl bg-blue-600 py-3 text-sm font-medium text-white shadow-sm">
                Bayar
              </button>
              <button class="w-44 rounded-xl bg-zinc-400 py-3 text-sm font-medium text-white">Lihat Tiket</button>
            </div>
          </div>
        </aside>
      </section>
    </main>
    <footer class="bg-indigo-950">
      <div class="px-16 py-8 text-white">
        <div class="flex items-center justify-between">
          <h2 class="text-xl font-bold">CoSpace</h2>
          <nav class="text-center text-base">
            <div class="mb-4">Home</div>
            <div class="mb-4">Workspace</div>
            <div>Profil</div>
          </nav>
          <div>Contact Us (Partnership)</div>
        </div>
        <p class="mt-6 pt-3 text-base font-medium text-zinc-100">&copy; 2024 Copyright. All rights reserved.</p>
      </div>
    </footer>
  </body>
</html>
