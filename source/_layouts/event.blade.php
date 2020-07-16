@extends('_layouts.master')

@section('body')
    <div
        class="pt-64 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/events-hero.jpg')"
    >
        <div class="container py-6 text-white bg-black-semi-9">
            <h1 class="text-3xl leading-none md:text-5xl">Events</h1>
        </div>
    </div>

    <div class="container flex items-center pt-16">
        <a href="/events" class="p-1 hover:text-gray-700 lg:-ml-16">
            <svg class="w-5 h-5" viewBox="0 0 19 20" fill="none">
                <path d="M3.83 5.87L6.36 8.3 4.95 9.64 0 4.92 4.95.21l1.41 1.34-2.53 2.42H11c2.12 0 4.16.8 5.66 2.23A7.44 7.44 0 0119 11.6c0 2.02-.84 3.96-2.34 5.39A8.2 8.2 0 0111 19.2H2v-1.9h9c1.6 0 3.12-.6 4.24-1.68A5.58 5.58 0 0017 11.59c0-1.52-.63-2.97-1.76-4.04A6.16 6.16 0 0011 5.87H3.83z" fill="currentColor"></path>
            </svg>
        </a>

        <nav class="ml-10 flex items-center font-light">
            <a class="hover:text-gray-700" href="/events">Events</a>
            <span class="px-2">
                <i data-feather="chevron-right" class="w-4 h-4"></i>
            </span>
            <span class="font-semibold">{{ $page->title }}</span>
        </nav>
    </div>

    <div class="container py-16">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full p-4 md:w-1/2 lg:w-2/3">
                <h2 class="text-gray-900 text-xl leading-tight md:text-2xl lg:text-3xl">
                    {{ $page->title }}
                </h2>
                <div class="mt-4 pre-formatted">
                    {!! $page->description !!}
                </div>
            </div>
            <div class="w-full p-4 md:w-1/2 lg:w-1/3">
                <div class="block w-full h-full shadow-sm bg-gray-200">
                    <div class="relative w-full bg-black">
                        <div class="relative w-full h-full ar-16x9">
                            <img
                                src="{{ $page->image['url'] }}"
                                :alt="{{ $page->image['description'] }}"
                                class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                            >

                            @if ($page->featured)
                                <div class="absolute top-0 left-0 px-5 py-6">
                                    <span
                                        role="status"
                                        aria-label="This is a featured event"
                                        class="inline-flex items-center p-2 text-xs whitespace-no-wrap leading-none border border-transparent rounded-md text-gray-900 bg-yellow-400"
                                    >
                                        Featured
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <div class="px-5 flex-1 py-8">
                            <p class="flex items-center text-sm">
                                <i data-feather="calendar" class="w-4 h-4"></i>
                                <span class="ml-3">{{ $page->start_date }}</span>
                                @if ($page->end_date)
                                    <span> - {{ $page->end_date }}</span>
                                @endif
                            </p>
                            <p class="mt-2 flex items-center text-sm">
                                <i data-feather="clock" class="w-4 h-4"></i>
                                <span class="ml-3">{{ $page->start_time }}</span>
                                @if ($page->end_time)
                                    <span> - {{ $page->end_time }}</span>
                                @endif
                            </p>
                            <div class="mt-6 flex flex-col items-center justify-center">
                                <a href="#" class="btn px-16 text-black border-black hover:bg-black hover:text-white">RSVP</a>
                                <a href="#" class="mt-2 inline-flex items-center text-sm hover:text-gray-700">
                                    <span>Request Partnership</span>
                                    <i data-feather="arrow-right" class="ml-3 w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection