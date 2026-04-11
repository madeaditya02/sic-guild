@extends('layouts.main')
@section('title', 'Create Category')
@section('content')
  <main class="font-nunito">
    <section class="mt-8 px-6 md:px-25">

      <a href="/dashboard/categories" class="inline-flex gap-2 items-center text-primary text-sm mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
        </svg>
        Back to Categories
      </a>

      <h1 class="text-4xl font-bold mb-8">Create Category</h1>

      <form action="" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div>
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter category name">
        </div>
        <div>
          <label for="icon">Icon</label>
          <input type="file" name="icon" id="icon" class="block w-full mt-2.5 px-3 py-2 border border-[#dddddd] rounded-lg file:bg-primary file:px-2 file:py-1 file:rounded-lg file:text-white file:mr-3">
        </div>
        <div class="col-span-full">
          <label for="description">Description</label>
          <textarea name="description" id="description" rows="4" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Write a short description"></textarea>
        </div>
        <div>
          <button class="px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
            Create
          </button>
        </div>
      </form>

    </section>
  </main>
@endsection