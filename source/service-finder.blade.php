---
title: Service Finder
description: Community organizations across Boston regularly seek volunteers to support their programs and initiatives. The Service Finder is an online database of community service opportunities available to Northeastern students, faculty, staff, and local residents to join on their own.
---

@extends('_layouts.master')

@section('body')
    <x-hero.bottom
        :title="$page->title"
        background-image="/assets/images/service-finder-hero.jpg"
    />
    <div class="container py-16">
        <div class="-mx-4 flex flex-wrap items-center">
            <div class="w-full p-4 md:w-1/2 lg:w-2/3">
                <p class="lg:text-lg">{{ $page->description }}</p>
                <p class="mt-4">Opportunities range from one-time events to weekly programs such as tutoring, mentoring, or tax preparation. Find the service project right for you.</p>
                <p class=mt-4>Interested in receiving weekly email updates on the opportunities located in the Service Finder? <a class="underline" href="https://lp.constantcontactpages.com/su/TSsX3GW">Sign up</a> for CCE’s Weekend Volunteer Digest.</p>
            </div>
            <div class="w-full p-4 md:w-1/2 lg:w-1/3">
                <div class="p-8 bg-gray-200">
                    <h3 class="text-xl font-bold">Seeking volunteers?</h3>
                    <p class="mt-2 text-gray-700">Community-based organizations seeking volunteers to support their events, programs, projects or initiatives can submit their service opportunity here.</p>
                    <a href="/service-finder/submit" class="mt-4 btn w-full text-black border-black hover:bg-black hover:text-white">Submit an Opportunity</a>
                </div>
            </div>
        </div>
    </div>
    <div
        x-init="init()"
        x-data="mergeObjects(contentfulServiceOpportunities('{{ $page->CONTENTFUL_SPACE_ID }}', '{{ $page->CONTENTFUL_API_KEY }}'), {
            activeTab: 'gallery',
            showFilters: false,
            locationLabelIsLifted: false,
            typeLabelIsLifted: false,
            timeOfYearLabelIsLifted: false,
            timeOfDayLabelIsLifted: false,
            durationLabelIsLifted: false,
            numberOfVolunteersLabelIsLifted: false,
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
                class="-mx-4 pb-4 flex flex-wrap items-end justify-start"
            >
                <div class="relative w-full p-4 sm:w-1/2 lg:w-1/4">
                    <label
                        for="location-filter"
                        class="pb-1 block text-gray-600 text-sm leading-tight pointer-events-none transition-all duration-150"
                        :class="{
                            'text-gray-900 font-semibold': locationLabelIsLifted,
                            'translate-y-8': !locationLabelIsLifted,
                        }"
                    >
                        Location
                    </label>
                    <select
                        id="location-filter"
                        x-ref="locationInput"
                        x-model="location"
                        class="form-select w-full px-0 border-0 border-b-2 transition-colors duration-150 focus:shadow-none focus:border-red-600"
                        placeholder=""
                        @focus="locationLabelIsLifted = true"
                        @blur="$refs.locationInput.value.length ? '' : locationLabelIsLifted = false"
                    >
                        <option value="" selected disabled></option>
                        <option value="any">Any location</option>
                        <option value="Virtual">Virtual</option>
                        <option value="On campus">On campus</option>
                        <option value="Allston/Brighton">Allston/Brighton</option>
                        <option value="Back Bay/South End">Back Bay/South End</option>
                        <option value="Beacon Hill">Beacon Hill</option>
                        <option value="Boston">Boston</option>
                        <option value="Brookline">Brookline</option>
                        <option value="Cambridge">Cambridge</option>
                        <option value="Charlestown">Charlestown</option>
                        <option value="Chinatown">Chinatown</option>
                        <option value="Dorchester">Dorchester</option>
                        <option value="Downtown/Financial District">Downtown/Financial District</option>
                        <option value="East Boston">East Boston</option>
                        <option value="Fenway">Fenway</option>
                        <option value="Hyde Park">Hyde Park</option>
                        <option value="Jamaica Plain">Jamaica Plain</option>
                        <option value="Mattapan">Mattapan</option>
                        <option value="Medford">Medford</option>
                        <option value="Metro West">Metro West</option>
                        <option value="Mission Hill">Mission Hill</option>
                        <option value="North End">North End</option>
                        <option value="North Shore">North Shore</option>
                        <option value="Quincy">Quincy</option>
                        <option value="Remote">Remote</option>
                        <option value="Roslindale">Roslindale</option>
                        <option value="Roxbury">Roxbury</option>
                        <option value="Seaport">Seaport</option>
                        <option value="Somerville">Somerville</option>
                        <option value="South Boston">South Boston</option>
                        <option value="South Shore">South Shore</option>
                        <option value="West End">West End</option>
                        <option value="West Roxbury">West Roxbury</option>
                    </select>
                </div>
                <div class="relative w-full p-4 sm:w-1/2 lg:w-1/4">
                    <label
                        for="type-filter"
                        class="pb-1 block text-gray-600 text-sm leading-tight pointer-events-none transition-all duration-150"
                        :class="{
                            'text-gray-900 font-semibold': typeLabelIsLifted,
                            'translate-y-8': !typeLabelIsLifted,
                        }"
                    >
                        Type
                    </label>
                    <select
                        id="type-filter"
                        x-ref="typeInput"
                        x-model="type"
                        class="form-select w-full px-0 border-0 border-b-2 transition-colors duration-150 focus:shadow-none focus:border-red-600"
                        placeholder=""
                        @focus="typeLabelIsLifted = true"
                        @blur="$refs.typeInput.value.length ? '' : typeLabelIsLifted = false"
                    >
                        <option value="" selected disabled></option>
                        <option value="any">Any type</option>
                        <option value="Animals">Animals</option>
                        <option value="Arts and Culture">Arts and Culture</option>
                        <option value="Community Outreach">Community Outreach</option>
                    </select>
                </div>
                <div class="relative w-full p-4 sm:w-1/2 lg:w-1/4">
                    <label
                        for="time-of-year-filter"
                        class="pb-1 block text-gray-600 text-sm leading-tight pointer-events-none transition-all duration-150"
                        :class="{
                            'text-gray-900 font-semibold': timeOfYearLabelIsLifted,
                            'translate-y-8': !timeOfYearLabelIsLifted,
                        }"
                    >
                        Time of Year
                    </label>
                    <select
                        id="time-of-year-filter"
                        x-ref="timeOfYearInput"
                        x-model="timeOfYear"
                        class="form-select w-full px-0 border-0 border-b-2 transition-colors duration-150 focus:shadow-none focus:border-red-600"
                        placeholder=""
                        @focus="timeOfYearLabelIsLifted = true"
                        @blur="$refs.timeOfYearInput.value.length ? '' : timeOfYearLabelIsLifted = false"
                    >
                        <option value="" selected disabled></option>
                        <option value="any">Any time</option>
                        <option value="Fall semester (Sept.–Dec.)">Fall semester (Sept.–Dec.)</option>
                        <option value="Spring semester (Jan.–April)">Spring semester (Jan.–April)</option>
                        <option value="Summer I semester (May–June)">Summer I semester (May–June)</option>
                        <option value="Summer II semester (July–August)">Summer II semester (July–August)</option>
                    </select>
                </div>
                <div class="relative w-full p-4 sm:w-1/2 lg:w-1/4">
                    <label
                        for="time-of-day-filter"
                        class="pb-1 block text-gray-600 text-sm leading-tight pointer-events-none transition-all duration-150"
                        :class="{
                            'text-gray-900 font-semibold': timeOfDayLabelIsLifted,
                            'translate-y-8': !timeOfDayLabelIsLifted,
                        }"
                    >
                        Time of Day
                    </label>
                    <select
                        id="time-of-day-filter"
                        x-ref="timeOfDayInput"
                        x-model="timeOfDay"
                        class="form-select w-full px-0 border-0 border-b-2 transition-colors duration-150 focus:shadow-none focus:border-red-600"
                        placeholder=""
                        @focus="timeOfDayLabelIsLifted = true"
                        @blur="$refs.timeOfDayInput.value.length ? '' : timeOfDayLabelIsLifted = false"
                    >
                        <option value="" selected disabled></option>
                        <option value="any">Any time</option>
                        <option value="Flexible">Flexible</option>
                        <option value="Weekday 12 a.m.–6 a.m.">Weekday 12 a.m.–6 a.m.</option>
                        <option value="Weekday 6 a.m.–noon">Weekday 6 a.m.–noon</option>
                        <option value="Weekday noon–6 p.m.">Weekday noon–6 p.m.</option>
                        <option value="Weekday 6 p.m.–midnight">Weekday 6 p.m.–midnight</option>
                        <option value="Weekend 12 a.m.–6 a.m.">Weekend 12 a.m.–6 a.m.</option>
                        <option value="Weekend 6 a.m.–noon">Weekend 6 a.m.–noon</option>
                        <option value="Weekend noon–6 p.m.">Weekend noon–6 p.m.</option>
                        <option value="Weekend 6 p.m.–midnight">Weekend 6 p.m.–midnight</option>
                    </select>
                </div>
                <div class="relative w-full p-4 sm:w-1/2 lg:w-1/4">
                    <label
                        for="duration-filter"
                        class="pb-1 block text-gray-600 text-sm leading-tight pointer-events-none transition-all duration-150"
                        :class="{
                            'text-gray-900 font-semibold': durationLabelIsLifted,
                            'translate-y-8': !durationLabelIsLifted,
                        }"
                    >
                        Duration
                    </label>
                    <select
                        id="duration-filter"
                        x-ref="durationInput"
                        x-model="duration"
                        class="form-select w-full px-0 border-0 border-b-2 transition-colors duration-150 focus:shadow-none focus:border-red-600"
                        placeholder=""
                        @focus="durationLabelIsLifted = true"
                        @blur="$refs.durationInput.value.length ? '' : durationLabelIsLifted = false"
                    >
                        <option value="" selected disabled></option>
                        <option value="One day">One day</option>
                        <option value="One week">One week</option>
                        <option value="Short series (3–5 events)">Short series (3–5 events)</option>
                        <option value="Periodic">Periodic</option>
                        <option value="Ongoing (weekly, monthly, etc.)">Ongoing (weekly, monthly, etc.)</option>
                    </select>
                </div>
                <div class="relative w-full p-4 sm:w-1/2 lg:w-1/4">
                    <label
                        for="number-of-volunteers-filter"
                        class="pb-1 block text-gray-600 text-sm leading-tight pointer-events-none transition-all duration-150"
                        :class="{
                            'text-gray-900 font-semibold': numberOfVolunteersLabelIsLifted,
                            'translate-y-8': !numberOfVolunteersLabelIsLifted,
                        }"
                    >
                        Number of Volunteers
                    </label>
                    <select
                        id="number-of-volunteers-filter"
                        x-ref="numberOfVolunteersInput"
                        x-model="numberOfVolunteers"
                        class="form-select w-full px-0 border-0 border-b-2 transition-colors duration-150 focus:shadow-none focus:border-red-600"
                        placeholder=""
                        @focus="numberOfVolunteersLabelIsLifted = true"
                        @blur="$refs.numberOfVolunteersInput.value.length ? '' : numberOfVolunteersLabelIsLifted = false"
                    >
                        <option value="" selected disabled></option>
                        <option value="Individual">Individual</option>
                        <option value="Small Group (2–10)">Small Group (2–10)</option>
                        <option value="Medium Group (11–20)">Medium Group (11–20)</option>
                        <option value="Large Group (21 or more)">Large Group (21 or more)</option>
                    </select>
                </div>
                <div class="w-full p-4 sm:w-1/2 lg:w-auto">
                    <button
                        class="btn-sm text-gray-600 uppercase tracking-widest border-gray-600 hover:bg-gray-600 hover:text-white"
                        @click.prevent="clearFilters()"
                    >
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
    </div>
@endsection
