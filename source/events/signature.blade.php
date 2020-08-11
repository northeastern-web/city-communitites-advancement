---
title: Signature Events
description: City and Community Engagement hosts several annual events that are free and open to the public and the Northeastern community. Join us! These events offer opportunities to network with peers and learn more about community- and service-related issues and ideas.
---

@extends('_layouts.master')

@section('body')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/signature-events-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">{{ $page->title }}</h1>
                <p class="mt-6 text-gray-200">{{ $page->description }}</p>
            </div>
        </div>
    </div>
    <div class="container py-16">
        <div class="-mx-4 flex flex-wrap items-stretch">
            @foreach ($events->where('signature') as $event)
                <x-event-card :event="$event" />
            @endforeach
        </div>
    </div>
@endsection
