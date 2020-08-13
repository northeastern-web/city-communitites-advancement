@extends('_layouts.master')

@section('body')
    <x-hero.simple title="Our Staff" />

    <div class="container flex items-center pt-16">
        <a href="/about/staff" class="p-1 hover:text-gray-700 lg:-ml-16">
            <svg class="w-5 h-5" viewBox="0 0 19 20" fill="none">
                <path d="M3.83 5.87L6.36 8.3 4.95 9.64 0 4.92 4.95.21l1.41 1.34-2.53 2.42H11c2.12 0 4.16.8 5.66 2.23A7.44 7.44 0 0119 11.6c0 2.02-.84 3.96-2.34 5.39A8.2 8.2 0 0111 19.2H2v-1.9h9c1.6 0 3.12-.6 4.24-1.68A5.58 5.58 0 0017 11.59c0-1.52-.63-2.97-1.76-4.04A6.16 6.16 0 0011 5.87H3.83z" fill="currentColor"></path>
            </svg>
        </a>

        <nav class="ml-10 flex items-center font-light">
            <a class="hover:text-gray-700" href="/about">About</a>
            <span class="px-2">
                <i data-feather="chevron-right" class="w-4 h-4"></i>
            </span>
            <a class="hover:text-gray-700" href="/about/staff">Staff</a>
            <span class="px-2">
                <i data-feather="chevron-right" class="w-4 h-4"></i>
            </span>
            <span class="font-semibold">{{ $page->name }}</span>
        </nav>
    </div>

    <div class="container pt-16 pb-32">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full p-4 md:w-1/2 lg:w-2/3">
                <h2 class="text-gray-900 text-xl leading-tight md:text-2xl lg:text-3xl">
                    {{ $page->name }}
                </h2>
                <p class="mt-4 text-gray-700 text-sm uppercase tracking-wide">{{ $page->title }}</p>
                <div class="mt-12 prose">
                    {!! $page->bio !!}
                </div>
            </div>
            <div class="w-full p-4 md:w-1/2 lg:w-1/3">
                    <div class="mx-auto relative w-80 h-80 rounded-full shadow-sm overflow-hidden">
                        <img
                            src="{{ $page->image['url'] }}"
                            :alt="{{ $page->image['description'] }}"
                            class="absolute w-full h-full object-cover"
                        >
                    </div>
                    <div class="mt-8 text-gray-900 text-center">
                        <div>
                            <a class="border-b border-gray-700 hover:text-gray-700 hover:border-gray-700" href="mailto:{{ $page->email }}">{{ $page->email }}</a>
                        </div>
                        <div class="mt-2 text-center">
                            <span>{{ $page->phone }}</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
