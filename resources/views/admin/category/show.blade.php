@extends('layouts.main')
@section('title', 'Category Detail')
@section('content')
  <main class="font-nunito">
    <section class="mt-8 px-6 md:px-25">
      <a href="/dashboard/categories" class="inline-flex gap-2 items-center text-primary text-sm mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
        </svg>
        Back to Categories
      </a>
      <div class="w-full max-w-sm mx-auto flex flex-col items-center gap-3 p-6 rounded-xl border border-gray-200 shadow-sm">
        <div class="size-14 flex items-center justify-center rounded-full bg-primary/10">
          <img src="/assets/icon-work.png" alt="" class="size-8 object-contain">
        </div>
        <h1 class="text-2xl font-bold">Work</h1>
        <p class="text-sm text-gray-500 text-center">Stories about careers, productivity, and the changing nature of work in the modern world.</p>
      </div>

    </section>
  </main>
@endsection