@extends('_layouts.master')

@section('body')
    <div
        class="bg-gray-900 bg-cover bg-center bg-no-repeat"
        style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('{{ $page->image['url'] }}')"
    >
        <div class="bg-black-semi-4">
            <div class="px-4 py-8 md:py-12 lg:py-16 lg:px-20">
                <h2 class="mt-4 text-gray-100 text-2xl leading-tight sm:text-3xl md:text-4xl lg:text-5xl">
                    {{ $page->title }}
                </h2>
                <p class="mt-6 flex items-center text-gray-100 md:text-lg lg:text-xl">
                    <i data-feather="clock" class="stroke-1"></i>
                    <span class="ml-2">{{ $page->date }}</span>
                </p>
                <a href="#" class="mt-6 inline-flex items-center text-gray-100">
                    <i data-feather="calendar" class="stroke-1"></i>
                    <span class="ml-2">Save to calendar</span>
                </a>
            </div>
        </div>
    </div>

    <div class="px-4 py-20 lg:px-20">
        <div class="max-w-5xl">
            <h2 class="font-bold text-xl">Event Details:</h2>
            <div class="mt-4 pre-formatted">
                {!! $page->description !!}
            </div>

            <a href="/events" class="mt-12 px-0 border-0 border-b-2 btn text-black border-red-600 hover:text-red-700">
                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-arrow-left w-4 h-4 mr-2"
                >
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Back to events
            </a>
        </div>
    </div>
@endsection