<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/script.js'])
  <title>Home - Perspectra</title>
</head>
<body>
  <header class="flex justify-between items-center px-6 md:px-25 py-6 bg-white fixed top-0 left-0 right-0 flex-wrap md:flex-nowrap transition">
    <h2 class="logo text-3xl font-belgrano">Perspectra</h2>
    <button class="nav-toggle md:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>
    <nav class="nav-menu hidden md:flex flex-col md:flex-row md:items-center gap-6 font-nunito w-full md:w-auto mt-4 md:mt-0">
      <a href="/">Home</a>
      <a href="/posts">Stories</a>
      <a href="/dashboard/create">Write</a> 
    </nav>
    <div class="auth-group hidden md:flex gap-6 font-nunito mt-4 md:mt-0">
      <a href="#" class="px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
        Sign In
      </a>
      <a href="#" class="px-3 py-2 rounded-lg border border-primary text-primary hover:bg-primary hover:text-white">
        Sign Up
      </a>
    </div>
  </header>

  <main class="font-nunito mt-20">
    <section id="hero" class="mt-8 md:mt-0 px-6 md:px-32 flex justify-between items-center">
      <div class="w-full md:w-[40%]">
        <h1 class="text-3xl md:text-5xl font-bold">Stories That Shape How We See</h1>
        <p class="mt-4 mb-8 md:text-2xl">
          A collection of thoughtful stories and perspectives that help you understand the world with greater clarity, empathy, and meaning
        </p>
        <div class="flex gap-4 md:gap-7">
          <a href="#" class="px-3 py-2 md:px-4.5 md:py-3 md:text-xl rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
            Start Exploring
          </a>
          <a href="#" class="px-3 py-2 md:px-4.5 md:py-3 md:text-xl rounded-lg border border-primary text-primary hover:bg-primary hover:text-white">
            Share Your Story
          </a>
        </div>
      </div>
      <img src="/assets/hero.png" alt="" class="hidden md:block w-[40%]">
    </section>
    <section id="posts" class="mt-12 px-6 md:px-25">
      <h2 class="text-2xl md:text-4xl font-bold text-center">Most Read Stories</h2>
      <p class="md:text-2xl text-center">Stories readers keep coming back to</p>
      <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <div class="rounded-lg overflow-hidden shadow-lg">
          <img src="/assets/view.jpg" alt="" class="w-full h-36 object-cover">
          <div class="p-4">
            <h3 class="text-2xl font-bold">Quiet Shifts Changing How We Work</h3>
            <div class="flex gap-2 items-center">
              <img src="/assets/user.jpg" alt="" class="size-8 rounded-full">
              <div>
                <h4 class="text-[12px]">Sarah Mitchell</h4>
                <p class="text-[8px] text-[#6666]">2 months ago</p>
              </div>
            </div>
            <p class="my-2.5">
              Modern work didn’t change overnight. It shifted quietly. There was no single moment when routines disappeared or when...
            </p>
            <a href="#" class="inline-flex gap-1 items-center text-sm text-primary">
              Read More
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </a>
          </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg">
          <img src="/assets/view.jpg" alt="" class="w-full h-36 object-cover">
          <div class="p-4">
            <h3 class="text-2xl font-bold">Quiet Shifts Changing How We Work</h3>
            <div class="flex gap-2 items-center">
              <img src="/assets/user.jpg" alt="" class="size-8 rounded-full">
              <div>
                <h4 class="text-[12px]">Sarah Mitchell</h4>
                <p class="text-[8px] text-[#6666]">2 months ago</p>
              </div>
            </div>
            <p class="my-2.5">
              Modern work didn’t change overnight. It shifted quietly. There was no single moment when routines disappeared or when...
            </p>
            <a href="#" class="inline-flex gap-1 items-center text-sm text-primary">
              Read More
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </a>
          </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg">
          <img src="/assets/view.jpg" alt="" class="w-full h-36 object-cover">
          <div class="p-4">
            <h3 class="text-2xl font-bold">Quiet Shifts Changing How We Work</h3>
            <div class="flex gap-2 items-center">
              <img src="/assets/user.jpg" alt="" class="size-8 rounded-full">
              <div>
                <h4 class="text-[12px]">Sarah Mitchell</h4>
                <p class="text-[8px] text-[#6666]">2 months ago</p>
              </div>
            </div>
            <p class="my-2.5">
              Modern work didn’t change overnight. It shifted quietly. There was no single moment when routines disappeared or when...
            </p>
            <a href="#" class="inline-flex gap-1 items-center text-sm text-primary">
              Read More
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </a>
          </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg">
          <img src="/assets/view.jpg" alt="" class="w-full h-36 object-cover">
          <div class="p-4">
            <h3 class="text-2xl font-bold">Quiet Shifts Changing How We Work</h3>
            <div class="flex gap-2 items-center">
              <img src="/assets/user.jpg" alt="" class="size-8 rounded-full">
              <div>
                <h4 class="text-[12px]">Sarah Mitchell</h4>
                <p class="text-[8px] text-[#6666]">2 months ago</p>
              </div>
            </div>
            <p class="my-2.5">
              Modern work didn’t change overnight. It shifted quietly. There was no single moment when routines disappeared or when...
            </p>
            <a href="#" class="inline-flex gap-1 items-center text-sm text-primary">
              Read More
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section id="start-writing" class="mx-6 md:mx-25 mt-12 bg-primary text-white px-4 py-6 md:p-10 rounded-2xl text-center">
      <h2 class="text-4xl font-bold text-[28px]">Your Perspective Matters</h2>
      <p class="mb-5">
        Every story carries a way of seeing the world. Share yours and be part of shaping how others understand it
      </p>
      <a href="#" class="px-3 py-2 rounded-lg border border-white">Start Writing</a>
    </section>
  </main>
  <footer class="px-4 my-12 text-center font-nunito text-[#999]">&copy; 2026 Perspectra. All rights reserved</footer>
</body>
</html>