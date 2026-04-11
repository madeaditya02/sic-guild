@extends('layouts.main')
@section('title', 'Edit User')
@section('content')
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
@endsection