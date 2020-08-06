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
                    <a href="/service-finder/submit" class="mt-4 btn w-full text-black border-black hover:bg-black hover:text-white">Submit an Opportunity</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-16">
            <div class="-mx-4 flex flex-wrap items-stretch">
                @foreach ($service_opportunities as $opportunity)
                    <div class="w-full flex flex-col p-4 sm:w-1/2 lg:w-1/3">
                        <a
                            href="{{ $opportunity->getPath() }}"
                            aria-label="{{ $opportunity->title }}"
                            class="group block w-full h-full bg-gray-100 shadow-sm transition-colors duration-200 hover:bg-gray-200 focus:outline-none focus:shadow-outline"
                        >
                            <div class="relative w-full bg-black">
                                <div class="relative w-full h-full ar-16x9">
                                    <img
                                        src="{{ $opportunity->image['url'] }}"
                                        alt="{{ $opportunity->image['description'] }}"
                                        class="absolute w-full h-full object-cover transition-opacity duration-200 group-hover:opacity-80"
                                    >
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <div class="flex-1">
                                    <div class="py-6 px-8">
                                        <h2 class="text-lg text-gray-900 font-bold leading-tight">{{ $opportunity->title }}</h2>
                                        <p class="mt-2 text-gray-700">{{ $opportunity->short_description }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
