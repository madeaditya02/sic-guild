<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/home.js'])
  <title>Home - Perspectra</title>
</head>
<body>
  <header class="flex justify-between items-center px-6 md:px-25 py-6 sticky top-0 bg-white flex-wrap md:flex-nowrap z-30">
    <h2 class="text-3xl font-belgrano">Perspectra</h2>
    <button class="nav-toggle md:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>
    <nav class="nav-menu md:items-center gap-6 font-nunito bg-white w-full md:w-auto shrink-0 flex-col md:flex-row items-start mt-5 md:mt-0">
      <a href="/">Home</a>
      <a href="/stories">Stories</a>
      <a href="/dashboard/create">Write</a>
    </nav>
    <div class="auth-group gap-6 font-nunito w-full md:w-auto shrink-0 mt-5 md:mt-0">
      <a href="/login" class="px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
        Sign In
      </a>
      <a href="/register" class="px-3 py-2 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white">
        Sign Up
      </a>
    </div>
  </header>

  <main class="font-nunito">
    <section class="mt-8 px-6 w-180 mx-auto max-w-full">
      <img src="/assets/view.jpg" alt="" class="w-full max-h-70 object-cover">
      <h1 class="text-4xl font-bold mt-5 text-center">Quiet Shifts Changing How We Work</h1>
      <div class="flex gap-2.5 items-stretch justify-center mt-2">
        <div>By <a href="" class="text-primary">Sarah Mitchell</a></div>
        <div class="divider w-px bg-black"></div>
        <div>12 Februari 2026</div>
        <div class="divider w-px bg-black"></div>
        <div>Work</div>
      </div>
      <div class="mt-8 mb-4">
        <p class="mt-4 first:mt-0">
          Modern work didn’t change overnight.
          It shifted quietly.
        </p>
        <p class="mt-4 first:mt-0">
          There was no single moment when routines disappeared or when productivity stopped being measured by hours spent at a desk. Instead, change arrived gradually — through new tools, evolving expectations, and a growing awareness that meaningful work is not defined by repetition.
        </p>
        <p class="mt-4 first:mt-0">
          Today, work is less about presence and more about contribution.
        </p>
        <p class="mt-4 first:mt-0">
          People are redefining what it means to be productive. It’s no longer about how busy we appear, but about the clarity of our thinking and the impact of our efforts. Many are realizing that creativity, collaboration, and adaptability matter far more than rigid schedules.
        </p>
        <p class="mt-4 first:mt-0">
          The quiet shift is this:
        </p>
        <p class="mt-4 first:mt-0">
          Work is becoming human again.
        </p>
        <p class="mt-4 first:mt-0">
          We are moving away from systems built purely for efficiency and toward environments that value reflection, flexibility, and trust. And in doing so, we are discovering that progress doesn’t always come from doing more — sometimes, it comes from seeing differently.</p>
        </p>
      </div>
      <a href="#" class="inline-flex gap-2 items-center text-primary">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
        </svg>
      Back to all post
      </a>
  </main>
  <footer class="px-4 my-12 text-center font-nunito text-[#999]">&copy; 2026 Perspectra. All rights reserved</footer>
</body>
</html>