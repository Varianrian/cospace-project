<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
    </style>
    <script
      type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-OHNMYm46EQhPheB2"
    ></script>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <head>
        <link rel="icon" href="{{ asset('favicon.ico') }}">
    </head>
  </head>

  <body>
    @if (! Request::is('auth/*'))
      @include('partials.navbar')
    @endif

    @yield('content')
    @include('components.toast')
    @if (! Request::is('auth/*'))
      @include('partials.footer')
    @endif
  </body>
</html>
