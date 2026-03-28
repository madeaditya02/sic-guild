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
      <a href="#">Manage Stories</a>
      <a href="#">Manage Users</a>
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
      <h1 class="text-4xl font-bold mb-8">Edit Profile</h1>
      <form action="" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter full name" value="Deasa Putra">
        </div>
        <div>
          <label for="username">Username</label>
          <input type="text" username="username" id="username" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter username" value="deasaputra99">
        </div>
        <div>
          <label for="picture">Profile Picture</label>
          <input type="file" name="picture" id="picture" class="block w-full mt-2.5 px-3 py-2 border border-[#dddddd] rounded-lg file:bg-primary file:px-2 file:py-1 file:rounded-lg file:text-white file:mr-3">
        </div>
        <div class="col-span-full">
          <button class="px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
            Update Profile
          </button>
        </div>
      </form>
    </section>
  </main>
  <footer class="px-4 my-12 text-center font-nunito text-[#999]">&copy; 2026 Perspectra. All rights reserved</footer>
</body>
</html>