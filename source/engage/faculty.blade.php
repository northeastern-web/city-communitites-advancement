---
title: Students
---

@extends('_layouts.engage')

@section('hero')
    <div
        class="py-16 bg-black"
    >
        <div class="container">
            <div class="max-w-xl w-full text-white">
                <h1 class="text-3xl leading-none md:text-5xl">Faculty</h1>
                <p class="mt-6 text-gray-200">City and Community Engagement offers several opportunities and programs for Northeastern faculty to engage with Boston residents and community organizations, including nonprofits and schools. We’ll work with you to develop service-learning courses, conduct research with a nonprofit, or co-host an event with a community organization, to name a few examples.</p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div
        class="-mx-4 flex flex-wrap items-stretch"
    >
        @foreach ($faculty as $item)
            <x-engage-card :item="$item" />
        @endforeach
    </div>
@endsection
