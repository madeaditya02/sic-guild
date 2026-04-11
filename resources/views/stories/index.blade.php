@extends('layouts.main')
@section('title', 'Stories')
@section('content')
<main class="font-nunito">
  <section class="mt-8 px-6 md:px-25">

    <h1 class="text-4xl font-bold">All Stories</h1>

    <form action="{{ route('stories') }}" method="GET" class="mt-4 flex flex-col sm:flex-row gap-3">
      <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        placeholder="Search for insight..."
        class="bg-[#F3F3F5] text-[#717182] rounded-lg px-4 py-2 w-full"
      >
      <select
        name="category"
        class="bg-[#F3F3F5] text-[#717182] rounded-lg px-4 py-2 shrink-0"
      >
        <option value="">All Categories</option>
        @foreach($categories as $cat)
          <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
            {{ $cat->name }}
          </option>
        @endforeach
      </select>
      <button
        type="submit"
        class="px-5 py-2 rounded-lg bg-primary text-white hover:bg-primary-300 shrink-0"
      >
        Search
      </button>
      @if(request('search') || request('category'))
        <a
          href="{{ route('stories') }}"
          class="px-5 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 shrink-0 flex items-center"
        >
          Reset
        </a>
      @endif
    </form>

    @if(request('category'))
      @php $activeCat = $categories->firstWhere('id', request('category')); @endphp
      @if($activeCat)
        <div class="mt-3 flex items-center gap-2 text-sm">
          <span class="text-gray-500">Filtering by:</span>
          <span class="bg-primary/10 text-primary px-3 py-0.5 rounded-full font-semibold">
            {{ $activeCat->name }}
          </span>
        </div>
      @endif
    @endif

    <div class="mt-8 mb-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      @forelse($posts as $post)
        <article class="blog-card rounded-lg overflow-hidden shadow-lg relative flex flex-col">
          <img
            src="{{ Storage::url($post->picture) }}"
            alt="{{ $post->title }}"
            class="w-full h-36 object-cover"
          >
          <div class="bg-primary text-white px-4 py-1.5 absolute top-0 right-0 text-sm">
            {{ $post->category->name }}
          </div>
          <div class="p-4 flex flex-col flex-1">
            <h3 class="text-xl font-bold line-clamp-2">{{ $post->title }}</h3>
            <div class="flex gap-2 items-center mt-2">
              <img
                src="{{ Storage::url($post->author->photo) }}"
                alt="{{ $post->author->name }}"
                class="size-8 rounded-full object-cover"
              >
              <div>
                <h4 class="text-[12px] font-semibold">{{ $post->author->name }}</h4>
                <p class="text-[10px] text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
              </div>
            </div>
            <p class="my-2.5 text-sm text-gray-600 line-clamp-3 flex-1">
              {{ $post->content }}
            </p>
            <a
              href="{{ route('stories.show', $post->id) }}"
              class="inline-flex gap-1 items-center text-sm text-primary mt-auto"
            >
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
        <div class="col-span-3 py-16 text-center">
          <p class="text-gray-400 text-lg">No stories found.</p>
          @if(request('search') || request('category'))
            <a href="{{ route('stories') }}" class="mt-3 inline-block text-primary text-sm">
              Clear filters
            </a>
          @endif
        </div>
      @endforelse
    </div>

    {{ $posts->links() }}

    {{-- @if($posts->hasPages())
      <div class="flex justify-between items-center gap-x-4 gap-y-2 mt-8 flex-wrap">
        <div class="text-sm text-gray-500">
          Showing {{ $posts->firstItem() }} to {{ $posts->lastItem() }} of {{ $posts->total() }} results
        </div>
        <div class="flex">
          @if($posts->onFirstPage())
            <span class="size-10 bg-[#F3F3F5] text-gray-300 flex justify-center items-center rounded-l-lg border-2 border-[#d3d3d3] cursor-not-allowed">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
              </svg>
            </span>
          @else
            <a href="{{ $posts->previousPageUrl() }}" class="size-10 bg-[#F3F3F5] flex justify-center items-center rounded-l-lg border-2 border-[#d3d3d3] hover:bg-gray-200">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
              </svg>
            </a>
          @endif

          @foreach($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
            @if($page == $posts->currentPage())
              <span class="size-10 bg-primary text-white flex justify-center items-center border-2 border-l-0 border-[#d3d3d3]">
                {{ $page }}
              </span>
            @elseif($page == 1 || $page == $posts->lastPage() || abs($page - $posts->currentPage()) <= 1)
              <a href="{{ $url }}" class="size-10 bg-white flex justify-center items-center border-2 border-l-0 border-[#d3d3d3] hover:bg-gray-100">
                {{ $page }}
              </a>
            @elseif(abs($page - $posts->currentPage()) == 2)
              <span class="size-10 bg-white flex justify-center items-center border-2 border-l-0 border-[#d3d3d3]">
                ...
              </span>
            @endif
          @endforeach

          @if($posts->hasMorePages())
            <a href="{{ $posts->nextPageUrl() }}" class="size-10 bg-[#F3F3F5] flex justify-center items-center rounded-r-lg border-2 border-l-0 border-[#d3d3d3] hover:bg-gray-200">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg>
            </a>
          @else
            <span class="size-10 bg-[#F3F3F5] text-gray-300 flex justify-center items-center rounded-r-lg border-2 border-l-0 border-[#d3d3d3] cursor-not-allowed">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
              </svg>
            </span>
          @endif
        </div>
      </div>
    @endif --}}

  </section>

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