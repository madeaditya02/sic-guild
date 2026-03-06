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
  <title>Login - Perspectra</title>
</head>
<body>
  <header class="mt-2 sm:mt-12 flex justify-center items-center px-6 md:px-25 py-6 sticky top-0 bg-white flex-wrap md:flex-nowrap z-30">
    <h1 class="text-3xl font-belgrano">Perspectra</h1>
  </header>

  <main class="font-nunito w-160 max-w-full mx-auto sm:shadow-lg px-6 sm:px-8 py-6">
    <form action="" method="POST" class="login-form">
      <div class="mb-6">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter your username">
      </div>
      <div class="mb-6">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter your password">
      </div>
      <button class="login-submit-btn inline-flex gap-2 items-center px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300 disabled:bg-primary-200 disabled:border-primary-200 disabled:cursor-not-allowed">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 animate-spin hidden">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
        </svg>
        Log In
      </button>
    </form>
  </main>
  <footer class="px-4 my-12 text-center font-nunito text-[#999]">&copy; 2026 Perspectra. All rights reserved</footer>
</body>
</html>