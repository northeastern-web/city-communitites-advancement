---
title: Residents
description: City and Community Engagement is committed to being a good neighbor and an active part of the communities near Northeastern’s Boston campus. We offer several programs through which neighborhood residents can recruit volunteers, reserve event space on campus, and request sponsorship of community events.
---

@extends('_layouts.engage')

@section('hero')
    <x-hero.card
        :title="$page->title"
        :description="$page->description"
        background-image="/assets/images/engage-residents-hero.jpg"
    />
@endsection

@section('content')
    <div class="-m-4 flex flex-wrap items-stretch">
        @foreach ($engageResidents as $item)
            <x-engage-card :item="$item" />
        @endforeach
    </div>
@endsection
