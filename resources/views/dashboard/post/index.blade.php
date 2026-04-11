@extends('layouts.main')
@section('title', 'Manage Stories')
@section('content')
  <main class="font-nunito">
    <section class="mt-8 px-6 md:px-25">
      <h1 class="text-4xl font-bold mb-2.5">Your Stories</h1>
      @if(session('success'))
        <div class="mt-4 px-4 py-3 bg-green-50 border border-green-200 text-green-700 rounded-lg">
          {{ session('success') }}
        </div>
      @endif

      @if(session('error'))
        <div class="mt-4 px-4 py-3 bg-red-50 border border-red-200 text-red-700 rounded-lg">
          {{ session('error') }}
        </div>
      @endif
      <a href="{{ route('dashboard.posts.create') }}" class="inline-flex gap-2 px-3 py-2 rounded-lg bg-primary border border-primary text-white hover:bg-primary-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Write Story
      </a> 
      <div class="mt-4">
        <article class="mt-6 pb-3 w-225 max-w-full border-b border-[#dddddd]">
          <h2 class="text-2xl font-bold">Quiet Shifts Changing How We Work</h2>
          <div class="flex gap-2.5 items-stretch mt-2.5 text-[#777777]">
            <div>12 Februari 2026</div>
            <div class="divider w-px bg-[#777777]"></div>
            <div>Work</div>
          </div>
          <p class="mt-2.5 text-lg">
            Modern work didn't change overnight. It shifted quietly. There was no single moment when routines disappeared or when...
          </p>
          <div class="flex mt-2.5 items-center gap-4">
            <a href="/dashboard/detail" class="inline-flex gap-2 items-center border-b border-transparent hover:border-black">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
              </svg>
              View
            </a>
            <a href="/dashboard/edit" class="inline-flex gap-2 items-center border-b border-transparent hover:border-black">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
              Edit
            </a>
            <a href="#" class="inline-flex gap-2 items-center border-b border-transparent hover:border-black">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
              </svg>
              Delete
            </a>
          </div>
        </article>
        <article class="mt-6 pb-3 w-225 max-w-full border-b border-[#dddddd]">
          <h2 class="text-2xl font-bold">Why Simplicity Often Leads to Better Decisions</h2>
          <div class="flex gap-2.5 items-stretch mt-2.5 text-[#777777]">
            <div>12 Februari 2026</div>
            <div class="divider w-px bg-[#777777]"></div>
            <div>Work</div>
          </div>
          <p class="mt-2.5 text-lg">
            In a world full of endless choices, complexity often disguises itself as intelligence. We tend to believe that more data, more analysis...
          </p>
          <div class="flex mt-2.5 items-center gap-4">
            <a href="/dashboard/detail" class="inline-flex gap-2 items-center border-b border-transparent hover:border-black">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
              </svg>
              View
            </a>
            <a href="/dashboard/edit" class="inline-flex gap-2 items-center border-b border-transparent hover:border-black">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
              </svg>
              Edit
            </a>
            <a href="#" class="inline-flex gap-2 items-center border-b border-transparent hover:border-black">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
              </svg>
              Delete
            </a>
          </div>
        </article>
      </div>
    </section>
  </main>
@endsection