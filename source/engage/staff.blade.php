---
title: Staff
description: City and Community Engagement offers several opportunities and programs for Northeastern staff to engage with Boston residents and community organizations, including nonprofits and schools. We’ll work to provide you with resources and opportunities to effectively participate in community service while meeting the goals identified by our partner organizations.
---

@extends('_layouts.engage')

@section('hero')
    <x-hero.card
        :title="$page->title"
        :description="$page->description"
        background-image="/assets/images/engage-staff-hero.jpg"
    />
@endsection

@section('content')
    <div class="-m-4 flex flex-wrap items-stretch">
        @foreach ($engageStaff as $item)
            <x-engage-card :item="$item" />
        @endforeach
    </div>
@endsection
