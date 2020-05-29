@extends('_layouts.master')

@section('body')
    <x-hero
        title="Events"
        background-image="/assets/images/events-hero.jpg"
        background-gradient="bg-gradient-black-semi-4-transparent-90deg"
    />

    <div class="max-w-screen-xl mx-auto px-8 py-20">
        <div class="flex flex-wrap items-stretch -mx-4">
            @foreach($events as $event)
                <div class="w-full flex flex-col p-4 sm:w-1/2 md:w-1/3">
                    <a
                        href="{{ $event->getUrl() }}?w=400"
                        aria-label="{{ $event->title }}"
                        class="block w-full h-full shadow-sm transition-colors duration-200 group focus:outline-none focus:shadow-outline bg-white hover:bg-gray-100"
                    >
                        @if ($event->image)
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
                        @endif

                        <div class="flex flex-col">
                            <div class="px-5 flex-1 py-8">
                                <h2 class="text-lg text-gray-900">{{ $event->title }}</h2>
                                <p class="mt-2 text-sm text-gray-700">{{ $event->short_description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection