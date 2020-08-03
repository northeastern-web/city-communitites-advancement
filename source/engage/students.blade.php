---
title: Students
---

@extends('_layouts.engage')

@section('hero')
    <div
        class="py-16 bg-gray-800 bg-cover bg-no-repeat bg-top"
        style="background-image: url('/assets/images/engage-students-hero.jpg')"
    >
        <div class="container">
            <div class="max-w-xl w-full px-8 py-12 text-white bg-black-semi-9 lg:px-12 lg:py-16">
                <h1 class="text-3xl leading-none md:text-5xl">Students</h1>
                <p class="mt-6 text-gray-200">City and Community Engagement supports Northeastern students who serve and collaborate with the community through a variety of programs, events, and opportunities. Whether you want to serve through a CCE program, take on a leadership role, or plan a service project for your student organization, we have the resources to get you started.</p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div
        class="-mx-4 flex flex-wrap items-stretch"
    >
        @foreach ($students as $item)
            <x-engage-card :item="$item" />
        @endforeach
    </div>
@endsection
