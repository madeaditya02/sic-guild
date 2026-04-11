@extends('layouts.main')
@section('title', 'Profile')
@section('content')
  <main class="font-nunito">
    <section class="mt-8 px-6 md:px-25">
      <h1 class="text-4xl font-bold mb-8">Edit Profile</h1>

      @if(session('success'))
        <div class="mb-6 px-4 py-3 bg-green-50 border border-green-200 text-green-700 rounded-lg">
          {{ session('success') }}
        </div>
      @endif

      <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data"
        class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @csrf
        @method('PUT')

        <div>
          <label for="name">Name</label>
          <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name', auth()->user()->name) }}"
            class="block w-full mt-2.5 px-5 py-3 border rounded-lg {{ $errors->has('name') ? 'border-red-400' : 'border-[#dddddd]' }}"
            placeholder="Enter full name"
          >
          @error('name')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="username">Username</label>
          <input
            type="text"
            name="username"
            id="username"
            value="{{ old('username', auth()->user()->username) }}"
            class="block w-full mt-2.5 px-5 py-3 border rounded-lg {{ $errors->has('username') ? 'border-red-400' : 'border-[#dddddd]' }}"
            placeholder="Enter username"
          >
          @error('username')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="photo">Profile Picture</label>
          <div class="mt-2.5 mb-2 flex items-center gap-3">
            @if(auth()->user()->photo)
              <img src="{{ Storage::url(auth()->user()->photo) }}" alt="Current photo" class="size-14 rounded-full object-cover border border-[#dddddd]">
            @else
              <div class="size-14 rounded-full bg-gray-100 border border-[#dddddd] flex items-center justify-center text-gray-400 text-xs">
                No photo
              </div>
            @endif
            <span class="text-xs text-gray-400">Current photo</span>
          </div>
          <input
            type="file"
            name="photo"
            id="photo"
            class="block w-full px-3 py-2 border rounded-lg file:bg-primary file:px-2 file:py-1 file:rounded-lg file:text-white file:mr-3 {{ $errors->has('photo') ? 'border-red-400' : 'border-[#dddddd]' }}"
          >
          <p class="mt-1 text-xs text-gray-400">Leave empty to keep the current photo</p>
          @error('photo')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-span-full">
          <button class="px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
            Update Profile
          </button>
        </div>

      </form>
    </section>
  </main>
@endsection