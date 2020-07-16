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
    <div
        x-init="init()"
        x-data="mergeObjects(contentfulEvents('{{ $page->CONTENTFUL_SPACE_ID }}', '{{ $page->CONTENTFUL_API_KEY }}'), {
            activeTab: 'gallery',
            showFilters: false,
            dateLabelIsLifted: false,
            locationLabelIsLifted: false,
            typeLabelIsLifted: false,
        })"
        class="container py-16"
    >
        <h2 class="text-xl leading-tight md:text-2xl lg:text-3xl">Upcoming Events</h2>
        <div class="mt-8 border-b-2 pb-2">
            <div class="-mx-4 flex flex-wrap items-center justify-between">
                <div class="flex items-center">
                    <button
                        :class="activeTab === 'gallery' ? 'text-gray-900' : 'text-gray-600'"
                        class="px-4 py-3 text-sm uppercase tracking-widest focus:outline-none focus:shadow-outline"
                        @click.prevent="activeTab = 'gallery'"
                    >
                        Gallery
                    </button>
                    <button
                        :class="activeTab === 'list' ? 'text-gray-900' : 'text-gray-600'"
                        class="px-4 py-3 text-sm uppercase tracking-widest focus:outline-none focus:shadow-outline"
                        @click.prevent="activeTab = 'list'"
                    >
                        List
                    </button>
                </div>
                <div class="-ml-4 flex items-center">
                    <div class="px-4">
                        <div class="relative w-48">
                            <label for="search" class="sr-only">Search</label>
                            <input
                                x-model="search"
                                id="search"
                                class="block w-full h-full py-2 pl-4 pr-10 text-gray-900 placeholder-gray-700 lg:text-sm focus:outline-none focus:shadow-outline"
                                placeholder="SEARCH"
                            >
                            <div class="absolute inset-y-0 right-0 mr-4 inline-flex items-center pointer-events-none">
                                <i data-feather="search" class="w-4 h-4 text-gray-500"></i>
                            </div>
                        </div>
                    </div>
                    <button
                        :class="showFilters ? 'text-gray-900' : 'text-gray-600'"
                        class="inline-flex items-center py-3 px-4 text-sm uppercase tracking-widest focus:outline-none focus:shadow-outline"
                        @click.prevent="showFilters = !showFilters"
                    >
                        <span>Filter</span>
                        <i data-feather="sliders" class="ml-2 w-4 h-4 text-gray-500 transform rotate-90"></i>
                    </button>
                </div>
            </div>
            <div
                x-show.transition.opacity.500ms="showFilters"
                class="-mx-4 pb-4 flex flex-wrap items-end justify-between"
            >
                <div class="relative w-full p-4 sm:w-1/2 lg:w-auto lg:flex-1">
                    <label
                        for="date-filter"
                        class="pb-1 block text-gray-600 text-sm leading-tight transition-all duration-150"
                        :class="{
                            'text-gray-900 font-semibold': dateLabelIsLifted,
                            'translate-y-8': !dateLabelIsLifted,
                        }"
                    >
                        Date
                    </label>
                    <select
                        id="date-filter"
                        x-ref="input"
                        x-model="date"
                        class="form-select w-full px-0 border-0 border-b-2 transition-colors duration-150 focus:shadow-none focus:border-red-600"
                        placeholder=""
                        @focus="dateLabelIsLifted = true"
                        @blur="$refs.input.value.length ? '' : dateLabelIsLifted = false"
                    >
                        <option value="" selected disabled></option>
                        <option value="any">Any</option>
                        <option value="less-than-90">In the next 90 days</option>
                    </select>
                </div>
                <div class="relative w-full p-4 sm:w-1/2 lg:w-auto lg:flex-1">
                    <label
                        for="location-filter"
                        class="pb-1 block text-gray-600 text-sm leading-tight transition-all duration-150"
                        :class="{
                            'text-gray-900 font-semibold': locationLabelIsLifted,
                            'translate-y-8': !locationLabelIsLifted,
                        }"
                    >
                        Location
                    </label>
                    <select
                        id="location-filter"
                        x-ref="input"
                        class="form-select w-full px-0 border-0 border-b-2 transition-colors duration-150 focus:shadow-none focus:border-red-600"
                        placeholder=""
                        @focus="locationLabelIsLifted = true"
                        @blur="$refs.input.value.length ? '' : locationLabelIsLifted = false"
                    >
                        <option value="" selected disabled></option>
                        <option value="any">Any location</option>
                    </select>
                </div>
                <div class="relative w-full p-4 sm:w-1/2 lg:w-auto lg:flex-1">
                    <label
                        for="type-filter"
                        class="pb-1 block text-gray-600 text-sm leading-tight transition-all duration-150"
                        :class="{
                            'text-gray-900 font-semibold': typeLabelIsLifted,
                            'translate-y-8': !typeLabelIsLifted,
                        }"
                    >
                        Type
                    </label>
                    <select
                        id="type-filter"
                        x-ref="input"
                        class="form-select w-full px-0 border-0 border-b-2 transition-colors duration-150 focus:shadow-none focus:border-red-600"
                        placeholder=""
                        @focus="typeLabelIsLifted = true"
                        @blur="$refs.input.value.length ? '' : typeLabelIsLifted = false"
                    >
                        <option value="" selected disabled></option>
                        <option value="any">Any type</option>
                    </select>
                </div>
                <div class="w-full p-4 sm:w-1/2 lg:w-auto">
                    <button class="btn-sm text-gray-600 uppercase tracking-widest border-gray-600 hover:bg-gray-600 hover:text-white">
                        Clear Filters
                    </button>
                </div>
            </div>
        </div>
        <div class="mt-4 text-sm text-gray-700 italic">
            Returning <span x-text="entries.length"></span> results
        </div>
        <div
            x-show="activeTab === 'gallery'"
            class="relative mt-6 -mx-4 flex flex-wrap items-stretch"
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
                class="relative flex flex-wrap items-stretch mt-6"
            >
                <template x-for="event in entries" :key="event.sys.id">
                    <div class="w-full flex flex-col p-4 sm:w-1/2 md:w-1/3">
                        <a
                            :href="`/events/${event.fields.slug}`"
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
                                    <p class="mt-2 text-sm text-gray-700" x-text="formatDate(event.fields.startDate)"></p>
                                    <p class="mt-2 text-sm text-gray-700" x-text="formatTime(event.fields.startTime)"></p>
                                    <p class="mt-2 text-sm text-gray-700" x-text="event.fields.shortDescription"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </template>
            </div>
            <div
                x-show.transition.opacity.200ms="loading"
                class="absolute inset-0 bg-white-semi-3"
            >
                <div class="loading text-4xl" role="status" aria-label="loading"></div>
            </div>
            <div class="mt-8 w-full flex items-center justify-center">
                <div class="px-1">
                    <button
                        class="inline-flex items-center justify-center w-6 h-6 text-sm leading-none text-gray-700 rounded-full focus:outline-none focus:shadow-outline"
                    >
                        <i data-feather="chevron-left" class="w-4 h-4"></i>
                    </button>
                </div>
                <div class="px-1">
                    <button
                        class="inline-flex items-center justify-center w-6 h-6 text-sm leading-none text-white bg-gray-900 rounded-full focus:outline-none focus:shadow-outline"
                    >
                        1
                    </button>
                </div>
                <div class="px-1">
                    <button
                        class="inline-flex items-center justify-center w-6 h-6 text-sm leading-none rounded-full focus:outline-none focus:shadow-outline"
                    >
                        2
                    </button>
                </div>
                <div class="px-1">
                    <button
                        class="inline-flex items-center justify-center w-6 h-6 text-sm leading-none rounded-full focus:outline-none focus:shadow-outline"
                    >
                        3
                    </button>
                </div>
                <div class="px-1">
                    <button
                        class="inline-flex items-center justify-center w-6 h-6 text-sm leading-none text-gray-700 rounded-full focus:outline-none focus:shadow-outline"
                    >
                        <i data-feather="chevron-right" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection