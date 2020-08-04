---
title: Events
description: City and Community Engagement and its partners regularly host events that are open to the public. Search this calendar to learn about our upcoming events.
---

@extends('_layouts.master')

@section('body')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/events-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">{{ $page->title }}</h1>
                <p class="mt-6 text-gray-200">{{ $page->description }}</p>
            </div>
        </div>
    </div>
    <div class="container py-16">
        <h2 class="text-xl leading-tight md:text-2xl lg:text-3xl">Upcoming Events</h2>
        <div class="mt-8 -mx-4 flex flex-wrap items-stretch">
            @foreach ($events as $event)
                <x-event-card :event="$event" />
            @endforeach
        </div>
    </div>
@endsection