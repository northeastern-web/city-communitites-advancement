---
title: Staff
description: City and Community Engagement offers several opportunities and programs for Northeastern staff to engage with Boston residents and community organizations, including nonprofits and schools. We’ll work to provide you with resources and opportunities to effectively participate in community service while meeting the goals identified by our partner organizations.
---

@extends('_layouts.engage')

@section('hero')
<div
    class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-center"
    style="background-image: url('/assets/images/engage-staff-hero.jpg')"
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
        @foreach ($engageStaff as $item)
            <x-engage-card :item="$item" />
        @endforeach
    </div>
@endsection
