<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Belgrano&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css'])
  <title>Document</title>
</head>
<body class="font-nunito">
  <header class="flex justify-between items-center px-6 md:px-25 py-8">
    <h2 class="logo text-3xl font-belgrano">Perspectra</h2>
    <button class="md:hidden">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-9">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>
    <nav class="hidden md:flex gap-6">
      <a href="" class="nav-link">Home</a>
      <a href="" class="nav-link">Stories</a>
      <a href="" class="nav-link">Write</a>
    </nav>
    <div class="btn-group hidden md:flex gap-6">
      <a href="" class="btn-main px-3 py-2 bg-primary text-white rounded-lg">Sign In</a>
      <a href="" class="btn-outline px-3 py-2 border border-primary text-primary rounded-lg">Sign Up</a>
    </div>
  </header>

  <main>
    <div class="hero">
      <section class="hero-content w-full md:w-[40%]">
        <h1 class="tagline text-5xl mb-4 font-bold">Stories That Shape How We See</h1>
        <p class="deskripsi mb-8 text-2xl">A collection of thoughtful stories and perspectives that help you understand the world with greater clarity, empathy, and meaning</p>
        <div class="hero-action flex gap-7">
          <a href="" class="btn-main px-3 py-2 bg-primary text-white rounded-lg">Start Exploring</a>
          <a href="" class="btn-outline px-3 py-2 border border-primary text-primary rounded-lg">Share Your Story</a>
        </div>
      </section>
      <img class="hero-img w-[40%] hidden md:block" src="/assets/hero.png" alt="">
    </div>

    <section id="blogs" class="mt-12 mx-6 md:mx-25">
      <h2 class="text-4xl font-bold text-center">Most Read Stories</h2>
      <p class="md:text-2xl text-center">Stories readers keep coming back to</p>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        <article class="relative shadow-xl rounded-lg overflow-hidden">
          <img src="/assets/view.jpg" alt="" class="h-[153px] w-full object-cover">
          <h3 class="mt-4 mx-4 text-2xl font-bold">Quiet Shifts Changing How We Work</h3>
          <p class="mt-2.5 mx-4">Modern work didn’t change overnight. It shifted quietly. There was no single moment when routines disappeared or when...</p>
          <a href="" class="flex mt-2.5 mx-4 mb-4 items-center gap-1 text-primary">
            Read More
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
            </svg>
          </a>
          <div class="absolute top-0 right-0 px-4 py-1.5 bg-primary text-white">
            Work
          </div>
        </article>
      </div>
    </section>

    <section class="mt-12 mx-6 md:mx-25 py-10 px-10 md:px-40 bg-primary text-white text-center rounded-[20px]">
      <h2 class="text-4xl font-bold">Your Perspective Matters</h2>
      <p class="md:text-2xl">
        Every story carries a way of seeing the world. Share yours and be part of shaping how others understand it
      </p>
      <a href="" class="inline-block mt-5 px-4.5 py-3 border border-white rounded-lg">Start Writing</a>
    </section>
  </main>
  <footer class="mx-6 md:mx-25 my-12 text-center text-[#999999]">
    &copy; 2026 Perspectra. All rights reserved
  </footer>
</body>
</html>