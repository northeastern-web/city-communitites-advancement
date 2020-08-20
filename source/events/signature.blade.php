---
title: Signature Events
description: City and Community Engagement hosts several annual events that are free and open to the public and the Northeastern community. Join us! These events offer opportunities to network with peers and learn more about community- and service-related issues and ideas.
---

@extends('_layouts.master')

@section('body')
    <x-hero.card
        :title="$page->title"
        :description="$page->description"
        background-image="/assets/images/signature-events-hero.jpg"
    />
    <div class="container py-16">
        @if ($events->where('signature')->isNotEmpty())
            <div class="-mx-4 flex flex-wrap items-stretch">
                @foreach ($events->where('signature') as $event)
                    <x-event-card :event="$event" />
                @endforeach
            </div>
        @else
            <p>There are currently no Signature Events. Please check back soon.</p>
        @endif
    </div>
@endsection
