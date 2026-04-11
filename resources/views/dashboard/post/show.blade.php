@extends('layouts.main')
@section('title', "Stories Detail")
@section('content')
<main class="font-nunito">
  <section class="mt-8 px-6 w-180 mx-auto max-w-full">

    <a href="{{ route('dashboard.posts.index') }}" class="inline-flex gap-2 items-center text-primary text-sm mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="1.5" stroke="currentColor" class="size-5">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
      </svg>
      Back to all stories
    </a>

    <img
      src=""
      alt=""
      class="w-full max-h-72 object-cover rounded-xl"
    >

    <h1 class="text-3xl md:text-4xl font-bold mt-3 text-center">Lorem ipsum dolor sit amet.</h1>
    <div class="flex gap-2.5 items-center justify-center mt-3 flex-wrap">
      <img
        src=""
        alt=""
        class="size-8 rounded-full object-cover"
      >
      <span class="text-sm font-semibold text-primary">Lorem, ipsum.</span>
      <div class="w-px h-4 bg-gray-300"></div>
      <span class="text-sm text-gray-500"></span>
      <div class="w-px h-4 bg-gray-300"></div>
      <a
        href="{{ route('stories') }}?category=1"
        class="bg-primary/10 text-primary text-xs font-semibold px-3 py-1 rounded-full hover:bg-primary/20"
      >
        Lorem, ipsum.
      </a>
    </div>
    <div class="mt-8 mb-6 prose prose-lg max-w-none text-gray-700 leading-relaxed whitespace-pre-line text-justify">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, exercitationem!
    </div>
  </section>
</main>
@endsection