@extends('_layouts.master')

@section('body')
    <x-hero
        title="Events"
        background-image="/assets/images/events-hero.jpg"
        background-gradient="bg-gradient-black-semi-4-transparent-90deg"
    />

    <div class="max-w-screen-xl mx-auto px-8 py-20">
        <div
            x-init="init()"
            x-data="contentfulComponent('{{ $page->CONTENTFUL_SPACE_ID }}', '{{ $page->CONTENTFUL_API_KEY }}')"
        >
            <div>
                <label for="search" class="mb-1 inline-block text-gray-600 text-sm leading-tight">Search</label>
                <div class="relative">
                    <div class="absolute inset-0 flex items-center pointer-events-none">
                        <i data-feather="search" class="w-4 h-4 text-gray-500"></i>
                    </div>
                    <input
                        id="search"
                        x-model.debounce.500ms="search"
                        class="block w-full h-full py-3 px-6 border-b border-gray-600 focus:outline-none focus:border-blue-500"
                    >
                </div>
            </div>
            <div
                class="relative"
                style="min-height: 480px"
            >
                <div
                    x-show.transition.opacity.200ms="! entries.length"
                    class="absolute inset-0 flex items-center justify-center text-center"
                >
                    There were no results for that search term.
                </div>
                <div
                    x-show.transition.opacity.500ms="entries.length"
                    class="relative flex flex-wrap items-stretch -mx-4 mt-6"
                >
                    <template x-for="event in entries" :key="event.sys.id">
                        <div class="w-full flex flex-col p-4 sm:w-1/2 md:w-1/3">
                            <a
                                :href="`/events/${event.fields.slug}?w=400`"
                                :aria-label="event.fields.title"
                                class="block w-full h-full shadow-sm transition-colors duration-200 group focus:outline-none focus:shadow-outline bg-white hover:bg-gray-100"
                            >
                                <div x-show="event.fields.image" class="relative w-full bg-black">
                                    <div class="relative w-full h-full ar-16x9">
                                        <img
                                            :src="event.fields.image.fields.file.url"
                                            :alt="event.fields.image.fields.file.details.description"
                                            class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                                        >

                                        <div x-show="event.fields.featured" class="absolute top-0 left-0 px-5 py-6">
                                            <span
                                                role="status"
                                                aria-label="This is a featured event"
                                                class="inline-flex items-center p-2 text-xs whitespace-no-wrap leading-none border border-transparent rounded-md text-gray-900 bg-yellow-400"
                                            >
                                                Featured
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <div class="px-5 flex-1 py-8">
                                        <h2 class="text-lg text-gray-900" x-text="event.fields.title"></h2>
                                        <p class="mt-2 text-sm text-gray-700" x-text="event.fields.shortDescription"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </template>
                </div>
                <div
                    x-show.transition.opacity.200ms="loading"
                    class="absolute inset-0 flex items-center justify-center bg-white-semi-3"
                >
                    <div class="loading text-4xl" role="status" aria-label="loading"></div>
                </div>
            </div>
        </div>
    </div>
@endsection