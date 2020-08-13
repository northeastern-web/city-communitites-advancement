---
title: Residents
description: City and Community Engagement is committed to being a good neighbor and an active part of the communities near Northeastern’s Boston campus. We offer several programs through which neighborhood residents can recruit volunteers, reserve event space on campus, and request sponsorship of community events.
---

@extends('_layouts.engage')

@section('hero')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/engage-residents-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">{{ $page->title }}</h1>
                <p class="mt-6 text-gray-200">{{ $page->description }}</p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="-m-4 flex flex-wrap items-stretch">
        @foreach ($engageResidents as $item)
            <x-engage-card :item="$item" />
        @endforeach
    </div>
@endsection
