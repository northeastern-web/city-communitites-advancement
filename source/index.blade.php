@extends('_layouts.master')

@section('body')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/home-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">Progress Through Partnerships</h1>
                <h3 class="mt-4 text-sm uppercase tracking-wide">Volunteer + serve</h3>
                <p class="mt-6 text-gray-200">Engage with communities in Boston and beyond by joining one or more of our programs. </p>
                <a href="#" class="mt-8 btn text-white bg-red-600 hover:bg-red-800">Learn about our programs</a>
            </div>
        </div>
    </div>

    <section class="container py-16">
        <p class="max-w-5xl text-gray-900 md:text-lg">We bring together community organizations, social service groups, government agencies, and Northeastern students, faculty, and staff to build a better world. A spirit of collaboration infuses everything we do, from hosting volunteer programs, to conducting service-based research, to organizing community events.</p>
        <a href="/contact" class="mt-6 inline-flex items-center text-gray-900 text-sm font-semibold hover:text-gray-700">
            <span>Contact us</span>
            <i data-feather="arrow-right" class="ml-2 h-5 w-5"></i>
        </a>
    </section>
    <section class="container pb-16">
        <h2 class="text-gray-900 text-xl leading-tight md:text-2xl lg:text-3xl">Events</h2>
        <p class="mt-2 text-gray-900">Take part in events hosted by City and Community Engagement.</p>
        <a href="/events" class="mt-6 inline-flex items-center text-gray-900 text-sm font-semibold hover:text-gray-700">
            <span>View all upcoming events</span>
            <i data-feather="arrow-right" class="ml-2 h-5 w-5"></i>
        </a>
        <div
            x-init="init()"
            x-data="contentfulComponent('{{ $page->CONTENTFUL_SPACE_ID }}', '{{ $page->CONTENTFUL_API_KEY }}')"
            class="-mx-4 mt-6 flex flex-wrap items-stretch"
        >
            @foreach ($events->take(2) as $event)
                <div class="max-w-2xl w-full flex flex-col p-4 sm:w-1/2">
                    <a
                        href="/events/{{ $event->slug }}"
                        aria-label="{{ $event->title }}"
                        class="group block w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 lg:flex hover:bg-gray-200 focus:outline-none focus:shadow-outline"
                    >
                        <div class="relative w-full bg-black lg:w-1/2">
                            <div class="relative w-full h-full ar-16x9 lg:pb-0">
                                <img
                                    src="{{ $event->image['url'] }}"
                                    alt="{{ $event->image['description'] }}"
                                    class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                                >

                                @if ($event->featured)
                                    <div
                                        role="status"
                                        aria-label="This is a featured event"
                                        class="absolute top-0 inset-x-0 py-2 px-8 text-sm text-white uppercase tracking-widest bg-black"
                                    >
                                        Featured
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="flex flex-col lg:w-1/2">
                            <div class="flex-1">
                                <p class="flex items-center px-5 py-2 text-sm text-gray-900 font-bold border-b">
                                    <i data-feather="calendar" class="mr-2 w-4 h-4"></i>
                                    <span>
                                        {{ $event->start_date }}
                                        @if ($event->end_date)
                                            to {{ $event->end_date }}
                                        @endif
                                    </span>
                                </p>
                                <p class="flex items-center px-5 py-2 text-sm text-gray-900 font-bold border-b">
                                    <i data-feather="clock" class="mr-2 w-4 h-4"></i>
                                    <span>
                                        {{ $event->start_time }}
                                        @if ($event->end_time)
                                            - {{ $event->end_time }}
                                        @endif
                                    </span>
                                </p>
                                <div class="py-12 px-8">
                                    <h2 class="text-lg text-gray-900 font-bold leading-tight">{{ $event->title }}</h2>
                                    <p class="mt-2 text-gray-700">{{ \Illuminate\Support\Str::limit($event->short_description, 120) }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <section class="container pb-16">
        <h2 class="text-gray-900 text-xl leading-tight md:text-2xl lg:text-3xl">News</h2>
        <p class="mt-2 text-gray-900">Learn more about who we are and the communities where we work.</p>
        <a href="/news" class="mt-6 inline-flex items-center text-gray-900 text-sm font-semibold hover:text-gray-700">
            <span>View all news</span>
            <i data-feather="arrow-right" class="ml-2 h-5 w-5"></i>
        </a>
        <div
            class="-mx-4 mt-6 flex flex-wrap items-stretch"
        >
            @foreach (range(1, 3) as $item)
                <div class="max-w-md w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                    <a
                        href="/news/{{ $item }}"
                        aria-label="News title"
                        class="group block w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:shadow-outline"
                    >
                        <div class="relative w-full bg-black">
                            <div class="relative w-full h-full ar-16x9">
                                <img
                                    src="https://images.unsplash.com/photo-1594027674776-513d05cb596a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                    alt="Image description"
                                    class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                                >
                            </div>
                        </div>

                        <div class="flex flex-col">
                            <div class="flex-1">
                                <div class="py-6 px-8">
                                    <h2 class="inline-block text-lg text-gray-900 font-bold leading-tight">News Article {{ $item }}</h2>
                                    <i data-feather="arrow-right" class="ml-3 inline-block h-5 w-5"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
