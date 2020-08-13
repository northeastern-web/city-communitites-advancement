---
title: Events
description: City and Community Engagement and its partners regularly host events that are open to the public. Search this calendar to learn about our upcoming events.
---

@extends('_layouts.master')

@section('body')
    <x-hero.card
        :title="$page->title"
        :description="$page->description"
        background-image="/assets/images/events-hero.jpg"
    />
    <div class="container py-16">
        <h2 class="text-xl leading-tight md:text-2xl lg:text-3xl">Upcoming Events</h2>
        <div class="mt-8 -mx-4 flex flex-wrap items-stretch">
            @foreach ($events as $event)
                <x-event-card :event="$event" />
            @endforeach
        </div>
    </div>
@endsection
