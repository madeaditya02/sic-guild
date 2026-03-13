@extends('layouts.main')

@section('title', 'Home')

@section('content')
  <main class="font-nunito">
    <section id="hero" class="mt-8 md:mt-0 px-6 md:px-32 flex justify-between items-center">
      <div class="w-full md:w-[40%]">
        <h1 class="text-3xl md:text-5xl font-bold">{{ $judul }}</h1>
        <p class="mt-4 mb-8 md:text-2xl">
          A collection of thoughtful stories and perspectives that help you understand the world with greater clarity, empathy, and meaning
        </p>
        <div class="flex gap-4 md:gap-7 items-start">
          <x-button size='large'>Start Exploring</x-button>
          <x-button size='large' variant='outline'>Share Your Story</x-button>
        </div>
      </div>
      <img src="/assets/hero.png" alt="" class="hidden md:block w-[40%]">
    </section>
    <section id="posts" class="mt-12 px-6 md:px-25">
      <h2 class="text-2xl md:text-4xl font-bold text-center">Most Read Stories</h2>
      <p class="md:text-2xl text-center">Stories readers keep coming back to</p>
      <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($posts as $post)
        <article class="blog-card rounded-lg overflow-hidden shadow-lg relative">
          <img src="{{ $post['image'] }}" alt="" class="w-full h-36 object-cover">
          <div class="bg-primary text-white px-4 py-1.5 absolute top-0 right-0">
            {{ $post['category']['name'] }}
          </div>
          <div class="p-4">
            <h3 class="text-2xl font-bold">{{ $post['title'] }}</h3>
            <div class="flex gap-2 items-center">
              <img src="{{ $post['author']['photo'] }}" alt="" class="size-8 rounded-full">
              <div>
                <h4 class="text-[12px]">{{ $post['author']['name'] }}</h4>
                <p class="text-[8px] text-[#6666]">{{ $post['created_at']->diffForHumans() }}</p>
              </div>
            </div>
            <p class="my-2.5">
              {{ $post['content'] }}
            </p>
            <a href="#" class="inline-flex gap-1 items-center text-sm text-primary">
              Read More
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </a>
          </div>
        </article>
        @endforeach
      </div>
    </section>
    <section id="start-writing" class="mx-6 md:mx-25 mt-12 bg-primary text-white px-4 py-6 md:p-10 rounded-2xl text-center">
      <h2 class="text-4xl font-bold text-[28px]">Your Perspective Matters</h2>
      <p class="mb-5">
        Every story carries a way of seeing the world. Share yours and be part of shaping how others understand it
      </p>
      <a href="/dashboard/create" class="px-3 py-2 rounded-lg border border-white">Start Writing</a>
    </section>
  </main>
@endsection