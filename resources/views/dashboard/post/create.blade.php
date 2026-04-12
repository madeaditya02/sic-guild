@extends('layouts.main')
@section('title', 'Create Stories')
@section('content')
  <main class="font-nunito">
    <section class="mt-8 px-6 md:px-25">
      <h1 class="text-4xl font-bold mb-8">Create Post</h1>
      <form action="{{ route('dashboard.posts.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        @csrf
        <div>
          <label for="title">Title</label>
          <input value="{{ old('title') }}" type="text" name="title" id="title" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Enter post title">
          @error('title')
              <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>
        
        <div>
          <label for="category_id">Category</label>
          <div class="relative">
            <select name="category_id" id="category_id" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg">
              @foreach ($categories as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
              @endforeach
            </select>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 absolute right-5 top-1/2 -translate-y-1/2">
              <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
          </div>
          @error('category')
              <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="col-span-full">
          <label for="picture">Picture</label>
          <input value="{{ old('picture') }}" type="file" name="picture" id="picture" class="block w-full mt-2.5 px-3 py-2 border border-[#dddddd] rounded-lg file:bg-primary file:px-2 file:py-1 file:rounded-lg file:text-white file:mr-3">
          @error('picture')
              <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div class="col-span-full">
          <label for="content">Content</label>
          <textarea value="{{ old('content') }}" name="content" id="content" rows="4" class="block w-full mt-2.5 px-5 py-3 border border-[#dddddd] rounded-lg" placeholder="Write your content"></textarea>
          @error('content')
              <p class="text-red-500">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <button type="submit" class="px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
            Create
          </button>
        </div>
      </form>
    </section>
  </main>
@endsection