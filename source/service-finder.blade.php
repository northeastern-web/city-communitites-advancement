---
title: Service Finder
---

@extends('_layouts.master')

@section('body')
    <div
        class="pt-64 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/service-finder-hero.jpg')"
    >
        <div class="container py-6 text-white bg-black-semi-9">
            <h1 class="text-3xl leading-none md:text-5xl">Service Finder</h1>
        </div>
    </div>
    <div class="container py-16">
        <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full p-4 md:w-1/2 lg:w-2/3">
                <p class="lg:text-lg">
                    Community organizations across Boston regularly seek volunteers to support their programs and initiatives. The Service Finder is an online database of community service opportunities available to Northeastern students, faculty, staff, and local residents to join on their own. Opportunities range from one-time events to weekly programs such as tutoring, mentoring, or tax preparation. Find the service project right for you
                </p>
            </div>
            <div class="w-full p-4 md:w-1/2 lg:w-1/3">
                <div class="p-8 bg-gray-200">
                    <h3 class="text-xl font-bold">Seeking volunteers?</h3>
                    <p class="mt-2 text-gray-700">Community-based organizations seeking volunteers to support their events, programs, projects or initiatives can submit their service opportunity here.</p>
                    <a href="#" class="mt-4 btn w-full text-black border-black hover:bg-black hover:text-white">Submit an Opportunity</a>
                </div>
            </div>
        </div>
    </div>
    <div
        x-init="init()"
        x-data="mergeObjects(contentfulServiceOpportunities('{{ $page->CONTENTFUL_CCE_SPACE_ID }}', '{{ $page->CONTENTFUL_CCE_API_KEY }}'), {
            activeTab: 'gallery',
            showFilters: false,
            dateLabelIsLifted: false,
            locationLabelIsLifted: false,
            typeLabelIsLifted: false,
        })"
        class="container pb-16"
    >
        <div class="border-b-2 pb-2">
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
                                id="search"
                                x-model.debounce.500ms="search"
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
                        class="inline-flex items-center px-4 py-3 text-sm uppercase tracking-widest focus:outline-none focus:shadow-outline"
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
                        class="form-select w-full px-0 border-0 border-b-2 transition-colors duration-150 focus:shadow-none focus:border-red-600"
                        placeholder=""
                        @focus="dateLabelIsLifted = true"
                        @blur="$refs.input.value.length ? '' : dateLabelIsLifted = false"
                    >
                        <option value="" selected disabled></option>
                        <option value="any">Any</option>
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
        <div class="mt-4 text-sm text-gray-700 italic" x-text="`Returning ${entries.length} results`"></div>
        <div
            class="relative mt-6"
            style="min-height: 480px"
        >
            <div
                x-show.transition.opacity.200ms="! entries.length"
                class="absolute inset-0 flex items-center justify-center text-center"
            >
                There were no results for that search term.
            </div>
            <div
                x-show="activeTab === 'gallery'"
                class="-mx-4 flex flex-wrap items-stretch"
            >
                <template x-for="entry in entries" :key="entry.sys.id">
                    <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                        <a
                            :href="`/service-finder/${entry.fields.slug}`"
                            :aria-label="entry.fields.title"
                            class="group block w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:shadow-outline"
                        >
                            <div class="relative w-full bg-black">
                                <div class="relative w-full h-full ar-16x9">
                                    <img
                                        :src="entry.fields.image.fields.file.url"
                                        :alt="entry.fields.image.fields.file.description"
                                        class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                                    >
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <div class="flex-1">
                                    <div class="py-6 px-8">
                                        <h2 class="text-lg text-gray-900 font-bold leading-tight" x-text="entry.fields.title"></h2>
                                        <p class="mt-2 text-gray-700" x-text="entry.fields.shortDescription"></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </template>
            </div>
            <div
                x-show="activeTab === 'list'"
            >
                <template x-for="entry in entries" :key="entry.sys.id">
                    <a
                        :href="`/service-finder/${entry.fields.slug}`"
                        :aria-label="entry.fields.title"
                        class="mt-4 block w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:shadow-outline"
                    >
                        <div class="py-12 px-8">
                            <h2 class="text-lg text-gray-900 font-bold leading-tight" x-text="entry.fields.title"></h2>
                            <p class="mt-2 text-gray-700 max-w-3xl" x-text="entry.fields.shortDescription"></p>
                        </div>
                    </a>
                </template>
            </div>
            <div
                x-show.transition.opacity.200ms="loading"
                class="absolute inset-0 bg-white-semi-3"
            >
                <div class="loading text-4xl" role="status" aria-label="loading"></div>
            </div>
        </div>
        <div class="mt-8 -mx-1 flex items-center justify-center">
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
@endsection
