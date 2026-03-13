@extends('layouts.main')

@section('title', 'Stories')

@section('content')
  <main class="font-nunito">
    <section class="mt-8 px-6 md:px-25">
      <h1 class="text-4xl font-bold">All Stories</h1>
      <form action="" class="flex gap-2.5 mt-4">
        <input type="text" placeholder="Search for insight..."
          class="bg-[#F3F3F5] text-[#717182] rounded-lg px-4 py-2 w-full">
        <button class="px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">Search</button>
      </form>
      <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <article class="blog-card rounded-lg overflow-hidden shadow-lg relative">
          <img src="/assets/view.jpg" alt="" class="w-full h-36 object-cover">
          <div class="bg-primary text-white px-4 py-1.5 absolute top-0 right-0">
            Work
          </div>
          <div class="p-4">
            <h3 class="text-2xl font-bold">Quiet Shifts Changing How We Work</h3>
            <div class="flex gap-2 items-center">
              <img src="/assets/user.jpg" alt="" class="size-8 rounded-full">
              <div>
                <h4 class="text-[12px]">Sarah Mitchell</h4>
                <p class="text-[8px] text-[#6666]">2 months ago</p>
              </div>
            </div>
            <p class="my-2.5">
              Modern work didn’t change overnight. It shifted quietly. There was no single moment when routines disappeared or when...
            </p>
            <a href="#" class="inline-flex gap-1 items-center text-sm text-primary">
              Read More
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
              </svg>
            </a>
          </div>
        </article>
      </div>
      <div class="flex justify-between items-center gap-x-4 gap-y-2 mt-8 flex-wrap">
        <div>Showing 1 to 6 of 200 results</div>
        <div class="flex">
          <button class="size-10 bg-[#F3F3F5] flex justify-center items-center first:rounded-l-lg last:rounded-r-lg border-2 border-l-0 first:border-l-2 border-[#d3d3d3]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
          </button>
          <button class="size-10 bg-primary text-white flex justify-center items-center first:rounded-l-lg last:rounded-r-lg border-2 border-l-0 first:border-l-2 border-[#d3d3d3]">
            1
          </button>
          <button class="size-10 bg-[#ffffff] flex justify-center items-center first:rounded-l-lg last:rounded-r-lg border-2 border-l-0 first:border-l-2 border-[#d3d3d3]">
            2
          </button>
          <button class="size-10 bg-[#ffffff] flex justify-center items-center first:rounded-l-lg last:rounded-r-lg border-2 border-l-0 first:border-l-2 border-[#d3d3d3]">
            ...
          </button>
          <button class="size-10 bg-[#ffffff] flex justify-center items-center first:rounded-l-lg last:rounded-r-lg border-2 border-l-0 first:border-l-2 border-[#d3d3d3]">
            16
          </button>
          <button class="size-10 bg-[#ffffff] flex justify-center items-center first:rounded-l-lg last:rounded-r-lg border-2 border-l-0 first:border-l-2 border-[#d3d3d3]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
              <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
          </button>
        </div>
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