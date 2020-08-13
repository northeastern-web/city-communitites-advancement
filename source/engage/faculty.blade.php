---
title: Faculty
description: City and Community Engagement offers several opportunities and programs for Northeastern faculty to engage with Boston residents and community organizations, including nonprofits and schools. We’ll work with you to develop service-learning courses, conduct research with a nonprofit, or co-host an event with a community organization, to name a few examples.
---

@extends('_layouts.engage')

@section('hero')
    <x-hero.card
        :title="$page->title"
        :description="$page->description"
        background-image="/assets/images/engage-faculty-hero.jpg"
    />
@endsection

@section('content')
    <div class="-m-4 flex flex-wrap items-stretch">
        @foreach ($engageFaculty as $item)
            <x-engage-card :item="$item" />
        @endforeach
    </div>
@endsection
