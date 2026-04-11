@extends('layouts.main')
@section('title', 'Edit User')
@section('content')
  <main class="font-nunito">
    <section class="mt-8 px-6 md:px-25">

      <a href="{{ route('dashboard.users.index') }}" class="inline-flex gap-2 items-center text-primary text-sm mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
        </svg>
        Back to Users
      </a>

      <h1 class="text-4xl font-bold mb-8">Edit User</h1>

      @if(session('success'))
        <div class="mb-6 px-4 py-3 bg-green-50 border border-green-200 text-green-700 rounded-lg">
          {{ session('success') }}
        </div>
      @endif

      <form action="{{ route('dashboard.users.update', $user->id) }}" method="POST" enctype="multipart/form-data"
        class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @csrf
        @method('PUT')

        <div>
          <label for="name">Name</label>
          <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $user->name) }}"
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
            value="{{ old('username', $user->username) }}"
            class="block w-full mt-2.5 px-5 py-3 border rounded-lg {{ $errors->has('username') ? 'border-red-400' : 'border-[#dddddd]' }}"
            placeholder="Enter username"
          >
          @error('username')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="role">Role</label>
          <div class="relative">
            <select
              name="role"
              id="role"
              class="block w-full mt-2.5 px-5 py-3 border rounded-lg appearance-none {{ $errors->has('role') ? 'border-red-400' : 'border-[#dddddd]' }}"
            >
              <option value="user" {{ old('role', $user->role) === 'user' ? 'selected' : '' }}>User</option>
              <option value="admin" {{ old('role', $user->role) === 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 absolute right-5 top-1/2 -translate-y-1/2 pointer-events-none">
              <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </div>
          @error('role')
            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="photo">Profile Picture</label>
          <div class="mt-2.5 mb-2 flex items-center gap-3">
            @if($user->photo)
              <img src="{{ Storage::url($user->photo) }}" alt="Current photo" class="size-14 rounded-full object-cover border border-[#dddddd]">
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
          <button type="submit" class="px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
            Save Changes
          </button>
        </div>

      </form>
    </section>
  </main>
@endsection