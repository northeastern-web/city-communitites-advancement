@extends('_layouts.master')

@section('body')
    <x-hero.bottom
        title="Events"
        background-image="{{ $page->image['url'] }}"
    />

    <div class="container pt-16">
        <a href="/events" class="-ml-1 inline-flex items-center p-1 hover:text-gray-700">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5" viewBox="0 0 19 20" fill="none">
                <path d="M3.83 5.87L6.36 8.3 4.95 9.64 0 4.92 4.95.21l1.41 1.34-2.53 2.42H11c2.12 0 4.16.8 5.66 2.23A7.44 7.44 0 0119 11.6c0 2.02-.84 3.96-2.34 5.39A8.2 8.2 0 0111 19.2H2v-1.9h9c1.6 0 3.12-.6 4.24-1.68A5.58 5.58 0 0017 11.59c0-1.52-.63-2.97-1.76-4.04A6.16 6.16 0 0011 5.87H3.83z" fill="currentColor"></path>
            </svg>
            <span class="ml-4">Back</span>
        </a>
    </div>

    <div class="container py-16">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full p-4 md:w-1/2 lg:w-2/3">
                <h2 class="text-gray-900 text-xl leading-tight md:text-2xl lg:text-3xl">
                    {{ $page->title }}
                </h2>
                <div class="mt-4 prose">
                    {!! $page->description !!}
                </div>
            </div>
            <div class="w-full p-4 md:w-1/2 lg:w-1/3">
                <div class="block w-full bg-gray-200 shadow-sm">
                    @if ($page->signature)
                        <div
                            role="status"
                            aria-label="This is a signature event"
                            class="px-5 py-3 text-white text-sm uppercase tracking-widest whitespace-nowrap leading-none bg-red-600 border border-transparent "
                        >
                            Signature
                        </div>
                    @endif
                    <div class="divide-y">
                        <p class="flex items-center px-5 py-2 text-sm text-gray-900 font-bold">
                            <i data-feather="calendar" class="mr-2 w-4 h-4"></i>
                            <span>
                                {{ $page->start_date }}
                                @if ($page->end_date && $page->start_date !== $page->end_date)
                                    to {{ $page->end_date }}
                                @endif
                            </span>
                        </p>
                        <p class="flex items-center px-5 py-2 text-sm text-gray-900 font-bold">
                            <i data-feather="clock" class="mr-2 w-4 h-4"></i>
                            <span>
                                {{ $page->start_time }}
                                @if ($page->end_time)
                                    - {{ $page->end_time }}
                                @endif
                            </span>
                        </p>
                        @if ($page->rsvp_url)
                            <div class="px-5 py-12 flex flex-col items-center justify-center">
                                <a
                                    href="{{ $page->rsvp_url }}"
                                    target="_blank" rel="noopener"
                                    class="btn px-16 text-black border-black hover:bg-black hover:text-white focus:outline-none focus:shadow-outline"
                                >
                                    RSVP
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
