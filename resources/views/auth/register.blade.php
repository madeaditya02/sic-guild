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
  <header class="mt-2 sm:mt-12 flex justify-center items-center px-6 md:px-25 py-6 sticky top-0 bg-white flex-wrap md:flex-nowrap z-30">
    <h1 class="text-3xl font-belgrano">Perspectra</h1>
  </header>

  <main class="font-nunito w-160 max-w-full mx-auto sm:shadow-lg px-6 sm:px-8 py-6">
    <form action="{{ route('register.post') }}" method="POST">
      @csrf
      <div class="mb-6">
        <label for="name">Name</label>
        <input value="{{ old('name') }}" type="text" name="name" id="name" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter your fullname">
        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="username">Username</label>
        <input value="{{ old('username') }}" type="text" name="username" id="username" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter your username">
        @error('username')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter your password">
        @error('password')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-6">
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter password again">
      </div>
      <button type="submit" class="px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
        Register
      </button>
    </form>
  </main>
  <footer class="px-4 my-12 text-center font-nunito text-[#999]">&copy; 2026 Perspectra. All rights reserved</footer>
</body>
</html>