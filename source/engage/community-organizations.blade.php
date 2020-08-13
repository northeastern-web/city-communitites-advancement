---
title: Community Organizations
description: City and Community Engagement provides a variety of programs, resources, and events for community organizations. These opportunities include sponsoring community events, recruiting volunteers for community service activities, collaborating with faculty on a service-learning course, and providing free or discounted tickets to Northeastern sporting events.
---

@extends('_layouts.engage')

@section('hero')
    <x-hero.card
        :title="$page->title"
        :description="$page->description"
        background-image="/assets/images/engage-community-hero.jpg"
    />
@endsection

@section('content')
    <div class="-m-4 flex flex-wrap items-stretch">
        @foreach ($engageCommunityOrganizations as $item)
            <x-engage-card :item="$item" />
        @endforeach
    </div>
@endsection
