@extends('_layouts.master')

@section('body')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/events-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">Events</h1>
                <p class="mt-6 text-gray-200">City and Community Engagement and its partners regularly host events that are open to the public. Search this calendar to learn about our upcoming events.  </p>
            </div>
        </div>
    </div>
    <div class="container py-16">
        <h2 class="text-xl leading-tight md:text-2xl lg:text-3xl">Upcoming Events</h2>
        <div class="mt-8 -mx-4 flex flex-wrap items-stretch">
            @foreach($events as $event)
                <div class="w-full flex flex-col p-4 sm:w-1/2 md:w-1/3">
                    <a
                        href="/events/{{ $event->slug }}"
                        aria-label="{{ $event->title }}"
                        class="block w-full h-full shadow-sm transition-colors duration-200 group focus:outline-none focus:shadow-outline bg-white hover:bg-gray-100"
                    >
                        <div class="relative w-full bg-black">
                            <div class="relative w-full h-full ar-16x9">
                                <img
                                    src="{{ $event->image['url'] }}"
                                    alt="{{ $event->image['description'] }}"
                                    class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                                >

                                @if ($event->featured)
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
                                <h2 class="text-lg text-gray-900">{{ $event->title }}</h2>
                                <p class="mt-2 flex items-center text-sm">
                                    <i data-feather="calendar" class="w-4 h-4"></i>
                                    <span class="ml-3">{{ $event->start_date }}</span>
                                    @if ($event->end_date)
                                        <span> - {{ $event->end_date }}</span>
                                    @endif
                                </p>
                                <p class="mt-2 flex items-center text-sm">
                                    <i data-feather="clock" class="w-4 h-4"></i>
                                    <span class="ml-3">{{ $event->start_time }}</span>
                                    @if ($event->end_time)
                                        <span> - {{ $event->end_time }}</span>
                                    @endif
                                </p>
                                <p class="mt-2 text-sm text-gray-700">{{ $event->short_description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection