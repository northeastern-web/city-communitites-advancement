---
title: Community Organizations
description: City and Community Engagement provides a variety of programs, resources, and events for community organizations. These opportunities include sponsoring community events, recruiting volunteers for community service activities, collaborating with faculty on a service-learning course, and providing free or discounted tickets to Northeastern sporting events.
---

@extends('_layouts.engage')

@section('hero')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
        style="background-image: url('/assets/images/engage-community-hero.jpg')"
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
        @foreach ($engageCommunityOrganizations as $item)
            <x-engage-card :item="$item" />
        @endforeach
    </div>
@endsection
