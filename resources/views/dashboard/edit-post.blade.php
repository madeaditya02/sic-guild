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
    <section class="mt-8 px-6 md:px-25">
      <h1 class="text-4xl font-bold mb-8">Edit Post</h1>
      <form action="" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
          <label for="title">Title</label>
          <input type="text" name="title" id="title" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter post title" value="Quiet Shifts Changing How We Work">
        </div>
        <div>
          <label for="category">Category</label>
          <div class="relative">
            <select name="category" id="category" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg">
              <option value="" disabled>Select Category</option>
              <option value="" selected>Work</option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 absolute right-5 top-1/2 -translate-y-1/2">
              <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </div>
        </div>
        <div class="col-span-full">
          <label for="picture">Picture</label>
          <input type="file" name="picture" id="picture" class="block w-full mt-2.5 px-3 py-2 border border-[#dddddd] rounded-lg file:bg-primary file:px-2 file:py-1 file:rounded-lg file:text-white file:mr-3">
          <img src="/assets/view.jpg" alt="" class="w-120 h-60 object-cover rounded-lg mt-4">
        </div>
        <div class="col-span-full">
          <label for="content">Content</label>
          <textarea name="content" id="content" rows="4" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Write your content">Modern work didn't change overnight. It shifted quietly. There was no single moment when routines disappeared or when</textarea>
        </div>
        <div>
          <button class="px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
            Update
          </button>
        </div>
      </form>
    </section>
  </main>
  <footer class="px-4 my-12 text-center font-nunito text-[#999]">&copy; 2026 Perspectra. All rights reserved</footer>
</body>
</html>