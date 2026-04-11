@extends('layouts.main')
@section('title', $post->title)
@section('content')
<main class="font-nunito">
  <section class="mt-8 px-6 w-180 mx-auto max-w-full">

    <a href="{{ route('stories') }}" class="inline-flex gap-2 items-center text-primary text-sm mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="1.5" stroke="currentColor" class="size-5">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
      </svg>
      Back to all stories
    </a>

    <img
      src="{{ Storage::url($post->picture) }}"
      alt="{{ $post->title }}"
      class="w-full max-h-72 object-cover rounded-xl"
    >

    <h1 class="text-3xl md:text-4xl font-bold mt-3 text-center">{{ $post->title }}</h1>
    <div class="flex gap-2.5 items-center justify-center mt-3 flex-wrap">
      <img
        src="{{ Storage::url($post->author->photo) }}"
        alt="{{ $post->author->name }}"
        class="size-8 rounded-full object-cover"
      >
      <span class="text-sm font-semibold text-primary">{{ $post->author->name }}</span>
      <div class="w-px h-4 bg-gray-300"></div>
      <span class="text-sm text-gray-500">{{ $post->created_at->format('d F Y') }}</span>
      <div class="w-px h-4 bg-gray-300"></div>
      <a
        href="{{ route('stories') }}?category={{ $post->category_id }}"
        class="bg-primary/10 text-primary text-xs font-semibold px-3 py-1 rounded-full hover:bg-primary/20"
      >
        {{ $post->category->name }}
      </a>
    </div>

    <div class="mt-8 mb-6 prose prose-lg max-w-none text-gray-700 leading-relaxed whitespace-pre-line text-justify">
      {{ $post->content }}
    </div>

  </section>

  @if($related->isNotEmpty())
    <section class="mt-12 px-6 md:px-25">
      <h2 class="text-2xl font-bold">More from {{ $post->category->name }}</h2>
      <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach($related as $item)
          <article class="blog-card rounded-lg overflow-hidden shadow-lg relative">
            <img
              src="{{ Storage::url($item->picture) }}"
              alt="{{ $item->title }}"
              class="w-full h-36 object-cover"
            >
            <div class="bg-primary text-white px-4 py-1.5 absolute top-0 right-0 text-sm">
              {{ $item->category->name }}
            </div>
            <div class="p-4">
              <h3 class="text-xl font-bold line-clamp-2">{{ $item->title }}</h3>
              <div class="flex gap-2 items-center mt-2">
                <img
                  src="{{ Storage::url($item->author->photo) }}"
                  alt="{{ $item->author->name }}"
                  class="size-8 rounded-full object-cover"
                >
                <div>
                  <h4 class="text-[12px] font-semibold">{{ $item->author->name }}</h4>
                  <p class="text-[10px] text-gray-400">{{ $item->created_at->diffForHumans() }}</p>
                </div>
              </div>
              <p class="my-2.5 text-sm text-gray-600 line-clamp-3">{{ $item->content }}</p>
              <a href="{{ route('stories.show', $item->id) }}"
                class="inline-flex gap-1 items-center text-sm text-primary">
                Read More
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                </svg>
              </a>
            </div>
          </article>
        @endforeach
      </div>
    </section>
  @endif

  <section id="start-writing"
    class="mx-6 md:mx-25 mt-12 bg-primary text-white px-4 py-6 md:p-10 rounded-2xl text-center">
    <h2 class="font-bold text-[28px]">Your Perspective Matters</h2>
    <p class="mb-5">
      Every story carries a way of seeing the world. Share yours and be part of shaping how others understand it
    </p>
    <a href="{{ route('dashboard.posts.create') }}" class="px-3 py-2 rounded-lg border border-white">Start Writing</a>
  </section>
</main>
@endsection