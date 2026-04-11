<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  {{-- Untuk yang nanyain masalah icon di tab --}}
  {{-- <link rel="icon" type="image/x-icon" href="/assets/user.jpg"> --}}
  <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/home.js'])
  <title>@yield('title') - Perspectra</title>
</head>
<body>
  <header class="flex justify-between items-center px-6 md:px-25 py-6 sticky top-0 bg-white flex-wrap md:flex-nowrap z-30">
    <h2 class="text-3xl font-belgrano">Perspectra</h2>
    <button class="nav-toggle md:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>
    <x-nav></x-nav>
    <div class="auth-group gap-6 font-nunito w-full md:w-auto shrink-0 mt-5 md:mt-0">
      @auth
          <p>{{ Auth::user()->username }}</p>
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="cursor-pointer">Logout</button>
          </form>
      @endauth
      @guest
        <x-button href="/login">Sign In</x-button>
        <x-button href="/register" variant='outline'>Sign Up</x-button>
      @endguest
    </div>
  </header>

  @yield('content')

  <footer class="px-4 my-12 text-center font-nunito text-[#999]">&copy; 2026 Perspectra. All rights reserved</footer>
</body>
</html>