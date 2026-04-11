@extends('layouts.main')
@section('title', 'Edit Stories')
@section('content')
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
              <option value="" selected>Work</option>
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 absolute right-5 top-1/2 -translate-y-1/2">
              <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </div>
        </div>
        <div class="col-span-full">
          <div>
            <label for="picture">Picture</label>
            <div class="mt-2.5 mb-2 flex items-center gap-3">
              <img src="/assets/picture-work.png" alt="" class="size-32 object-contain rounded-lg border border-[#dddddd] p-1">
              <span class="text-xs text-gray-400">Current picture</span>
            </div>
            <input type="file" name="picture" id="picture" class="block w-full px-3 py-2 border border-[#dddddd] rounded-lg file:bg-primary file:px-2 file:py-1 file:rounded-lg file:text-white file:mr-3">
            <p class="mt-1 text-xs text-gray-400">Leave empty to keep the current picture</p>
          </div>
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
@endsection