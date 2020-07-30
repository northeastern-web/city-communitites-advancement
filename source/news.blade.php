---
pagination:
  collection: news
  perPage: 3
---

@extends('_layouts.master')

@section('body')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/news-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">News</h1>
                <p class="mt-6 text-gray-200">Read the latest news about our people, our programs, and our achievements.</p>
            </div>
        </div>
    </div>
    <div class="container py-16">
        <div class="-mx-4 flex flex-wrap items-stretch">
            @foreach($pagination->items as $article)
                <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                    <a
                        href="{{ $article->getPath() }}"
                        aria-label="{{ $article->title }}"
                        class="group block w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:shadow-outline"
                    >
                        <div class="relative w-full bg-black">
                            <div class="relative w-full h-full ar-16x9">
                                <img
                                    src="{{ $article->image['url'] }}"
                                    alt="{{ $article->image['description'] }}"
                                    class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                                >
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <div class="flex-1">
                                <div class="py-6 px-8">
                                    <h2 class="text-lg text-gray-900 font-bold leading-tight">{{ $article->title }}</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="mt-8 -mx-1 flex items-center justify-center">
            <div class="px-1">
                @if ($pagination->previous)
                    <a
                        href="{{ $page->baseUrl . $pagination->previous }}"
                        class="inline-flex items-center justify-center w-6 h-6 text-sm leading-none text-gray-700 rounded-full focus:outline-none focus:shadow-outline"
                    >
                        <i data-feather="chevron-left" class="w-4 h-4"></i>
                    </a>
                @else
                    <span class="inline-flex items-center justify-center w-6 h-6 text-gray-500 cursor-not-allowed">
                        <i data-feather="chevron-left" class="w-4 h-4"></i>
                    </span>
                @endif
            </div>

            @foreach ($pagination->pages as $pageNumber => $path)
                <div class="px-1">
                    <a
                        href="{{ $page->baseUrl }}{{ $path }}"
                        class="{{ $pagination->currentPage == $pageNumber ? 'text-white bg-black' : 'text-gray-900' }} inline-flex items-center justify-center w-6 h-6 text-sm leading-none rounded-full focus:outline-none focus:shadow-outline"
                    >
                        {{ $pageNumber }}
                    </a>
                </div>
            @endforeach

            <div class="px-1">
                @if ($pagination->next)
                    <a
                        href="{{ $page->baseUrl . $pagination->next }}"
                        class="inline-flex items-center justify-center w-6 h-6 text-sm leading-none text-gray-700 rounded-full focus:outline-none focus:shadow-outline"
                    >
                        <i data-feather="chevron-right" class="w-4 h-4"></i>
                    </a>
                @else
                    <span class="inline-flex items-center justify-center w-6 h-6 text-gray-500 cursor-not-allowed">
                        <i data-feather="chevron-right" class="w-4 h-4"></i>
                    </span>
                @endif
            </div>
        </div>
    </div>
@endsection
