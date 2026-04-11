@extends('layouts.main')
@section('title', 'Home')
@section('content')
<main class="font-nunito">
  <section id="hero" class="mt-8 md:mt-0 px-6 md:px-32 flex justify-between items-center">
    <div class="w-full md:w-[40%]">
      <h1 class="text-3xl md:text-5xl font-bold">Stories That Shape How We See</h1>
      <p class="mt-4 mb-8 md:text-2xl">
        A collection of thoughtful stories and perspectives that help you understand the world
        with greater clarity, empathy, and meaning
      </p>
      <div class="flex gap-4 md:gap-7 items-start">
        <x-button href="{{ route('stories') }}" size='large'>Start Exploring</x-button>
        <x-button href="{{ route('dashboard.posts.create') }}" size='large' variant='outline'>Share Your Story</x-button>
      </div>
    </div>
    <img src="/assets/hero.png" alt="" class="hidden md:block w-[40%]">
  </section>

  <section id="posts" class="mt-12 px-6 md:px-25">
    <h2 class="text-2xl md:text-4xl font-bold text-center">Most Read Stories</h2>
    <p class="md:text-2xl text-center">Stories readers keep coming back to</p>
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      @forelse($posts as $post)
        <article class="blog-card rounded-lg overflow-hidden shadow-lg relative">
          <img src="{{ Storage::url($post->picture) }}" alt="{{ $post->title }}" class="w-full h-36 object-cover">
          <div class="bg-primary text-white px-4 py-1.5 absolute top-0 right-0">
            {{ $post->category->name }}
          </div>
          <div class="p-4">
            <h3 class="text-2xl font-bold line-clamp-2">{{ $post->title }}</h3>
            <div class="flex gap-2 items-center mt-2">
              <img
                src="{{ Storage::url($post->author->photo) ?? '/assets/default-avatar.png' }}"
                alt="{{ $post->author->name }}"
                class="size-8 rounded-full object-cover"
              >
              <div>
                <h4 class="text-[12px] font-semibold">{{ $post->author->name }}</h4>
                <p class="text-[10px] text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
              </div>
            </div>
            <p class="my-2.5 text-sm text-gray-600 line-clamp-3">
              {{ $post->content }}
            </p>
            <a href="{{ route('stories.show', $post->id) }}" class="inline-flex gap-1 items-center text-sm text-primary">
              Read More
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </a>
          </div>
        </article>
      @empty
        <p class="col-span-3 text-center text-gray-400">Belum ada postingan.</p>
      @endforelse
    </div>
  </section>

  <section id="categories" class="mt-12 px-6 md:px-25">
    <h2 class="text-2xl md:text-4xl font-bold text-center">Explore Topics</h2>
    <p class="md:text-2xl text-center">Find stories that match your interests</p>
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      @forelse($categories as $category)
        <a href="{{ route('stories') }}?category={{ $category->id }}"
          class="group flex flex-col items-center gap-3 p-6 rounded-xl border border-gray-200
                 shadow-sm hover:shadow-md hover:border-primary transition-all duration-200">
          <div class="size-14 flex items-center justify-center rounded-full bg-primary/10
                      group-hover:bg-primary/20 transition-colors">
            <img src="{{ Storage::url($category->icon) }}" alt="" class="size-8 object-contain">
          </div>
          <h3 class="text-lg font-bold group-hover:text-primary transition-colors">
            {{ $category->name }}
          </h3>
          <p class="text-sm text-gray-500 text-center line-clamp-2">
            {{ $category->description }}
          </p>
          <span class="text-xs text-primary font-semibold">
            {{ $category->posts_count }} {{ Str::plural('story', $category->posts_count) }}
          </span>
        </a>
      @empty
        <p class="col-span-3 text-center text-gray-400">Belum ada kategori.</p>
      @endforelse
    </div>
  </section>

  <section id="start-writing"
    class="mx-6 md:mx-25 mt-12 bg-primary text-white px-4 py-6 md:p-10 rounded-2xl text-center">
    <h2 class="text-4xl font-bold text-[28px]">Your Perspective Matters</h2>
    <p class="mb-5">
      Every story carries a way of seeing the world. Share yours and be part of shaping
      how others understand it
    </p>
    <a href="{{ route('dashboard.posts.create') }}" class="px-3 py-2 rounded-lg border border-white">
      Start Writing
    </a>
  </section>
</main>
@endsection